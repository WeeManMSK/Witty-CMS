<?php

namespace backend\controllers\catalog;

use backend\controllers\ReferenceController;
use backend\services\interfaces\ICatalogItemImageService;
use common\services\interfaces\ICatalogItemService;

class ItemController extends ReferenceController
{
    private $catalogItemService;
    private $catalogItemImageService;

    public function __construct($id,
                                $module,
                                ICatalogItemService $catalogItemService,
                                ICatalogItemImageService $catalogItemImageService,
                                $config = [] ){
        $this->catalogItemService = $catalogItemService;
        $this->catalogItemImageService = $catalogItemImageService;
        parent::__construct($id, $module, $catalogItemService, $config);
    }

    public function actionUpdate($id)
    {
        $attributesForSave = \Yii::$app->request->post('Attribute');
        if (count($attributesForSave)>0) {
            $this->catalogItemService->updateAttributeValues($attributesForSave, $id);
        }

        $this->catalogItemImageService->add(\Yii::$app->request->post('image'), $id);

        return parent::actionUpdate($id);
    }
}