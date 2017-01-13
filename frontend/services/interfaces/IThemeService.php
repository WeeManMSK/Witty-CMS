<?php

namespace frontend\services\interfaces;


interface IThemeService extends \common\services\interfaces\IThemeService
{
    /**
     * @return array
     */
    public function get(): array;
}