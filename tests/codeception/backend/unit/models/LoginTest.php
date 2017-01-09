<?php
namespace tests\codeception\backend\models;

use common\models\Role;
use tests\codeception\backend\unit\TestCase;
use tests\codeception\common\fixtures\RoleFixture;
use tests\codeception\common\fixtures\UserFixture;
use yii;
use common\models\LoginForm;

class LoginTest extends TestCase
{
    use \Codeception\Specify;
    /**
     * @var \tests\codeception\backend\UnitTester
     */
    protected $tester;

    public function setUp()
    {
        parent::setUp();

        Yii::configure(Yii::$app, [
            'components' => [
                'user' => [
                    'class' => 'yii\web\User',
                    'identityClass' => 'common\models\User',
                ],
            ],
        ]);
    }

    protected function tearDown()
    {
        Yii::$app->user->logout();
        parent::tearDown();
    }

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testAdminLoginCorrect()
    {
        $model = new LoginForm([
            'username' => 'admin',
            'password' => 'password',
        ]);

        $this->specify('user able to login and role is Admin', function () use ($model) {
            expect('model should login user', $model->login())->true();
            expect('user should have identity', Yii::$app->user->identity != null)->true();
            expect('user should have role Admin', Yii::$app->user->identity->roleId==Role::ADMIN)->true();
        });
    }

    public function testUserLoginCorrect()
    {
        $model = new LoginForm([
            'username' => 'user',
            'password' => 'password_0',
        ]);

        $this->specify('user should be able to login and have role User', function () use ($model) {
            expect('model should login user', $model->login())->true();
            expect('user should have role User', Yii::$app->user->identity->roleId == Role::USER)->true();
            expect('user should not have role Admin', Yii::$app->user->identity->roleId == Role::ADMIN)->false();
        });
    }

    public function testAdminLoginWrongPassword()
    {
        $model = new LoginForm([
            'username' => 'admin',
            'password' => 'wrong_password',
        ]);

        $this->specify('user able to login and role is Admin', function () use ($model) {
            expect('model should not login user', $model->login())->false();
            expect('user should not have identity', Yii::$app->user->identity == null)->true();
            expect('user sdould not be logged in', Yii::$app->user->isGuest)->true();
        });
    }

    public function testLoginNoUser()
    {
        $model = new LoginForm([
            'username' => 'not_existing_username',
            'password' => 'not_existing_password',
        ]);

        $this->specify('user should not be able to login, when there is no identity', function () use ($model) {
            expect('model should not login user', $model->login())->false();
            expect('user should not be logged in', Yii::$app->user->isGuest)->true();
        });
    }

    public function testGuestLogin()
    {
        $model = new LoginForm([
            'username' => 'guest',
            'password' => 'password_0',
        ]);

        $this->specify('user should be able to login and have role Guest', function () use ($model) {
            expect('model should login user', $model->login())->true();
            expect('user should have role Guest', Yii::$app->user->identity->roleId == Role::GUEST)->true();
            expect('user should not have role Admin', Yii::$app->user->identity->roleId == Role::ADMIN)->false();
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
            ]
        ];
    }
}