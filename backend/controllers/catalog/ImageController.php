<?php

namespace backend\controllers\catalog;

use backend\controllers\BaseController;
use backend\services\interfaces\ICatalogItemImageService;

class ImageController extends BaseController
{
    private $catalogItemImageService;

    /**
     * ImageController constructor.
     * @param string $id
     * @param \yii\base\Module $module
     * @param ICatalogItemImageService $catalogItemImageService
     * @param array $config
     */
    public function __construct($id,
                                $module,
                                ICatalogItemImageService $catalogItemImageService,
                                $config = [] ){
        $this->catalogItemImageService = $catalogItemImageService;
        parent::__construct($id, $module, $config);
    }

    public function actionRemove($id){
        $itemId = $this->catalogItemImageService->removeAndReturnItemId($id);

        return $this->redirect(['catalog/item/update','id'=>$itemId]);
    }
}