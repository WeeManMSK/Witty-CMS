<?php

namespace common\services\interfaces;


use common\models\Settings;

interface ISettingsService
{
    /**
     * @return Settings
     */
    public function get() : Settings;
}