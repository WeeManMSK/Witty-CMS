<?php

namespace backend\services\interfaces;


interface ICatalogItemImageService extends \common\services\interfaces\ICatalogItemImageService
{

    /**
     * @param string $url
     * @param int $id
     * @return mixed|void
     */
    public function add(string $url, int $id);
}