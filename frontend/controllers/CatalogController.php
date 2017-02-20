<?php

namespace frontend\controllers;

use frontend\services\interfaces\ICatalogItemAttributeService;
use frontend\services\interfaces\ICatalogItemService;

class CatalogController extends BaseController
{
    private $attributeService;
    private $itemService;

    public function __construct($id,
                                $module,
                                ICatalogItemAttributeService $attributeService,
                                ICatalogItemService $itemService,
                                $config = []){
        $this->attributeService = $attributeService;
        $this->itemService= $itemService;
        parent::__construct($id, $module, $config);
    }

    public function actionIndex(){
        return $this->render('index',[
            'items' => $this->itemService->search(\Yii::$app->request->queryParams),
        ]);
    }
}