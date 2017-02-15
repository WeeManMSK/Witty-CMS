<?php

namespace backend\controllers;


use backend\services\interfaces\IMenuService;

class MenuController extends ReferenceController
{
    private $menuService;

    public function __construct($id,
                                $module,
                                IMenuService $menuService,
                                $config = [] ){
        $this->menuService = $menuService;
        parent::__construct($id, $module, $menuService, $config);
    }
}