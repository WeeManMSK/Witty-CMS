<?php
namespace tests\codeception\backend\models;

use common\models\LoginForm;
use common\services\implementations\PageService;
use common\services\interfaces\IPageService;
use yii;
use common\models\Page;
use tests\codeception\backend\unit\TestCase;
use tests\codeception\common\fixtures\PageFixture;
use tests\codeception\common\fixtures\RoleFixture;
use tests\codeception\common\fixtures\UserFixture;

class PageTest extends TestCase
{
    use \Codeception\Specify;

    /**
     * @var $pageService IPageService
     */
    private $pageService;

    /**
     * @var \tests\codeception\backend\UnitTester
     */
    protected $tester;

    public function setUp()
    {
        parent::setUp();

        $this->pageService = new PageService();

        Yii::configure(Yii::$app, [
            'components' => [
                'user' => [
                    'class' => 'yii\web\User',
                    'identityClass' => 'common\models\User',
                ],
            ],
        ]);

        $login = new LoginForm([
            'username'=>'admin',
            'password'=>'password'
        ]);
        $login->login();
    }

    protected function _before()
    {

    }

    protected function _after()
    {
    }

    // tests
    public function testCanCreatePage()
    {
        $model = new Page();

        $this->specify("Cannot save Page without required fields", function () use ($model){
           expect('Page should not be save', $this->pageService->save($model))->false();
        });

        $model->title = 'new_title';
        $model->body = "body";

        $this->specify("Can save Page with required fields", function () use ($model){
            expect('Page should be saved', $this->pageService->save($model))->true();
            expect('Page should have author', $model->authorId == Yii::$app->user->id)->true();
            expect('Page should have created at', $model->created_at != null)->true();
        });
    }

    public function testCanUpdatePage(){
        $model = Page::findOne(1);

        sleep(1);
        $model->title = 'new title';

        $this->specify('Can update page', function () use ($model){
            expect('Page should be saved', $this->pageService->save($model)!= false)->true();
            expect('Page should have modified by', $model->modifiedById == Yii::$app->user->id)->true();
            expect('Page should have different create time & update time', $model->updated_at !== $model->created_at)->true();
        });

        $model = Page::findOne(1);

        $this->specify('Blog have new title', function () use ($model){
            expect('Page should have new title', $model->title == 'new title')->true();
        });
    }

    public function testCanDeletePage(){
        $model = Page::findOne(1);

        $this->pageService->delete($model->id);

        $this->specify('Can delete page', function () use ($model){
            expect('Page exist and IsDeleted equal true', Page::findOne(1)->isDeleted == true)->true();
        });
    }

    public function testCannotDuplicatePage(){
        $model = new Page();

        $model->title = 'title_new';
        $model->body = 'body';
        $model->url = "url_new";

        $this->specify('Cannot save page with not unique field', function () use ($model){
            expect('Can save', $this->pageService->save($model))->true();
            $model->title = 'title';
            expect('Cannot save with not unique Title', $this->pageService->save($model))->false();
            $model->title = 'title_new';
            $model->url = "url";
            expect('Cannot save with not unique Url', $this->pageService->save($model))->false();
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
            'page' => [
                'class' => PageFixture::className(),
                'dataFile' => '@tests/codeception/common/unit/fixtures/data/models/page.php'
            ]
        ];
    }
}