<?php

namespace frontend\controllers;

use frontend\services\interfaces\ICatalogItemAttributeService;

class CatalogController extends BaseController
{

    private $attributeService;

    public function __construct($id,
                                $module,
                                ICatalogItemAttributeService $attributeService,
                                $config = []){
        $this->attributeService = $attributeService;
        parent::__construct($id, $module, $config);
    }

    public function actionIndex(){
        return $this->render('index',[

        ]);
    }
}