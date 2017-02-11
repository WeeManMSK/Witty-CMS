<?php

namespace backend\controllers\catalog;

use backend\controllers\BaseController;
use backend\services\interfaces\ICatalogItemImageService;

class ItemController extends BaseController
{
    private $catalogItemImageService;

    public function __construct($id,
                                $module,
                                ICatalogItemImageService $catalogItemImageService,
                                $config = [] ){
        $this->catalogItemImageService = $catalogItemImageService;
        parent::__construct($id, $module, $config);
    }
}