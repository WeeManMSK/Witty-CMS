<?php
namespace tests\codeception\backend\models;

use backend\services\implementations\SettingsService;
use common\models\Settings;
use tests\codeception\common\fixtures\SettingsFixture;
use yii;
use backend\services\interfaces\ISettingsService;
use tests\codeception\backend\unit\TestCase;

class SettingsTest extends TestCase
{

    use \Codeception\Specify;

    /**
     * @var $settingsService ISettingsService
     */
    private $settingsService;

    /**
     * @var \tests\codeception\backend\UnitTester
     */
    protected $tester;

    protected function setUp()
    {
        parent::setUp();

        $this->settingsService = new SettingsService();
    }
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSaveSettings()
    {
        $model = $this->settingsService->get();

        $settingsArray = [
            'theme_id'=>1,
            'version'=>'22',
            'is_offline'=>true
        ];
        
        $this->specify('User should be able to save model', function () use ($model, $settingsArray){
           expect('Settings was saved correctly', $this->settingsService->save($settingsArray))->true();
        });
    }

    /**
     * @inheritdoc
     */
//    public function fixtures()
//    {
//        return [
//            'settings' => [
//                'class' => SettingsFixture::className(),
//                'dataFile' => '@tests/codeception/common/unit/fixtures/data/models/settings.php'
//            ],
//        ];
//    }
}