<?php

namespace backend\services\implementations;


use backend\services\interfaces\ISettingsService;

class SettingsService extends \common\services\implementations\SettingsService implements ISettingsService
{

    /**
     * @param array $post
     * @return bool
     */
    public function save(array $post) : bool
    {
        $settings = $this->get();
        $settings->load($post);

        return ($settings->save());
    }
}