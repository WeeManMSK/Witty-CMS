<?php

namespace backend\services\implementations;


use backend\services\interfaces\ICatalogItemImageService;
use common\models\CatalogItemImage;

class CatalogItemImageService extends \common\services\implementations\CatalogItemImageService implements  ICatalogItemImageService
{

    /**
     * @param string $url
     * @param int $id
     * @return mixed|void
     */
    public function add(string $url, int $id)
    {
        $model = new CatalogItemImage();
        $model->item_id = $id;
        $model->image_url = $url;
        $model->order = 0;
        $model->title = "Title";
        $model->save();
    }
}