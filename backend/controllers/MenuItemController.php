<?php

namespace backend\controllers;


use backend\services\interfaces\IMenuItemService;

class MenuItemController extends ReferenceController
{
    private $menuItemService;

    public function __construct($id,
                                $module,
                                IMenuItemService $menuItemService,
                                $config = [] ){
        $this->menuItemService = $menuItemService;
        parent::__construct($id, $module, $menuItemService, $config);
    }
}