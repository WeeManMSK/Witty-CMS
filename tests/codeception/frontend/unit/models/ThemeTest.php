<?php
namespace tests\codeception\backend\models;

use frontend\services\implementations\SettingsService;
use yii;
use frontend\services\implementations\ThemeService;
use frontend\services\interfaces\IThemeService;
use tests\codeception\frontend\unit\TestCase;

class ThemeTest extends TestCase
{
    use \Codeception\Specify;

    /**
     * @var $themeService IThemeService
     */
    private $themeService;

    protected function setUp()
    {
        parent::setUp();

        $this->themeService = new ThemeService(new SettingsService());
    }


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
    public function testGetTheme()
    {
        $model = $this->themeService->get();

        expect('User should be able to get theme', $model != null)->true();
        expect('Theme contains basePath', $model['basePath'] != null)->true();
        expect('Theme contains baseUrl', $model['baseUrl'] != null)->true();
        expect('Theme contains pathMap', $model['pathMap'] != null && count($model['pathMap'])===1)->true();
    }
}