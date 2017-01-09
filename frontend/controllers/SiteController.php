<?php
namespace frontend\controllers;

use frontend\services\interfaces\IPageService;
use yii;

class SiteController extends BaseController
{
    private $pageService;

    /**
     * SiteController constructor.
     * @param string $id
     * @param yii\base\Module $module
     * @param IPageService $pageService
     * @param array $config
     */
    public function __construct($id,
                                $module,
                                IPageService $pageService,
                                $config = []){
        $this->pageService = $pageService;
        parent::__construct($id, $module, $config);
    }
    
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index',[
            'page'=>$this->pageService->getIndex()
        ]);
    }



    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
}
