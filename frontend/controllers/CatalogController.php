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
        $attributeSearch = \Yii::$app->request->post('attribute');
        if ($attributeSearch === null) {
            $attributeSearch = [];
        }
        return $this->render('index',[
            'items' => $this->itemService->search($attributeSearch),
            'attributes' => $this->attributeService->getForSearch(\Yii::$app->request->queryParams),
            'attributeSearch' => $attributeSearch
        ]);
    }

    public function actionView(int $id){
        return $this->render('item/view', [
            'item'=>$this->itemService->get($id)
        ]);
    }
}