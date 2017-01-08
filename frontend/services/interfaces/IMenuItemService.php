<?php

namespace frontend\services\interfaces;


interface IMenuItemService extends \common\services\interfaces\IMenuItemService
{

    public function getItems(string $menuType) : array;
}