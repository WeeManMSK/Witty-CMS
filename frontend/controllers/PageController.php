<?php

namespace frontend\controllers;


use common\models\PageType;
use frontend\services\interfaces\IPageService;

class PageController extends BaseController
{
    private $pageService;

    /**
     * SiteController constructor.
     * @param string $id
     * @param \yii\base\Module $module
     * @param IPageService $pageService
     * @param array $config
     * @internal param string $layout
     */
    public function __construct($id,
                                $module,
                                IPageService $pageService,
                                $config = []){
        $this->pageService = $pageService;
        parent::__construct($id, $module, $config);
    }

    public function actionView(string $url){
        $page = $this->pageService->getPage($url);
        if ($page->layout != null){
            $this->layout = "custom/".$page->layout;
        }

        return $this->renderByPageType($page->page_type_id, [
            'page' => $page
        ]);
    }

    private function renderByPageType(int $page_type_id = null, array $params = [])
    {
        switch ($page_type_id){
            case PageType::CATALOG :
                return $this->redirect(['/catalog']);
                break;
            default:
                return parent::render('view', $params);
        }
    }
}