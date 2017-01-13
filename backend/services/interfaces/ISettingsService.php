<?php

namespace backend\services\interfaces;


interface ISettingsService extends \common\services\interfaces\ISettingsService
{
    /**
     * @param array $post
     * @return bool
     */
    public function save(array $post) : bool;
}