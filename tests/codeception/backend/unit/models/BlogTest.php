<?php
namespace tests\codeception\backend\models;

use common\models\BlogStatus;
use common\models\LoginForm;
use tests\codeception\common\fixtures\BlogFixture;
use yii;
use common\models\Blog;
use tests\codeception\backend\unit\TestCase;
use tests\codeception\common\fixtures\RoleFixture;
use tests\codeception\common\fixtures\UserFixture;

class BlogTest extends TestCase
{
    use \Codeception\Specify;
    /**
     * @var \tests\codeception\backend\UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testCanCreateBlog()
    {
        $model = new Blog();

        $this->specify('User cannot create a Blog without required fileds', function() use ($model){
            expect('Model should not validate', $model->validate())->false();
            expect("Model should not save", $model->save())->false();
        });

        $model->title = "title";
        $model->content = "content";
        $model->created_by = 1;
        $model->status_id = BlogStatus::findOne(['code'=>BlogStatus::DRAFT])->id;

        $this->specify('User can save a Blog', function() use ($model){
            expect('Model should validate', $model->validate())->true();
            expect("Model should save", $model->save(false))->true();
            expect("Model should have id", $model->id !== null)->true();
            expect("Model should have Created At", $model->created_at !== null)->true();
            expect("Model should have Update At", $model->updated_at !== null)->true();
        });
    }

    public function testCannotCreateBlogWithNotUniqueFields(){
        $model = new Blog([
            'title'=>'Title',
            'content'=>'content',
            'url'=>'url',
            'created_by'=>1,
            'status_id'=>1,
        ]);

        $this->specify('User cannot create blog with non unique Url', function () use ($model){
            expect('Model cannot be saved', $model->save())->false();
        });

        $model->url = 'new_url';

        $this->specify('User cannot create blog with non unique Url', function () use ($model){
            expect('Model cannot be saved', $model->save())->true();
        });
    }

    public function testCanUpdateBlog(){
        $model = Blog::findOne(['id'=>1]);

        sleep(1);

        $model->title = "new title";

        $this->specify('User can update Blog', function() use ($model){
            expect('Model should update', $model->save())->true();
            expect('Model update time should not been equal create time', $model->updated_at !== $model->created_at)->true();
        });
    }

    public function testCanDeleteBlog(){
        $model = Blog::findOne(['id'=>1]);

        $this->specify('User can delete Blog', function() use ($model){
            expect('Model should delete', $model->delete() !== false)->true();
            expect('Cannot find model with same id', Blog::findOne(['id'=>1])===null)->true();
        });
    }

    /**
     * @inheritdoc
     */
    public function fixtures()
    {
        return [
            'role' => [
                'class' => RoleFixture::className(),
                'dataFile' => '@tests/codeception/common/unit/fixtures/data/models/role.php'
            ],
            'user' => [
                'class' => UserFixture::className(),
                'dataFile' => '@tests/codeception/backend/unit/fixtures/data/models/user.php'
            ],
            'blog' => [
                'class' => BlogFixture::className(),
                'dataFile' => '@tests/codeception/common/unit/fixtures/data/models/blog.php'
            ]
        ];
    }
}