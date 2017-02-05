<?php

namespace backend\controllers\catalog;

use backend\controllers\ReferenceController;
use common\services\interfaces\ICatalogItemService;

class ItemController extends ReferenceController
{
    private $catalogItemService;

    public function __construct($id,
                                $module,
                                ICatalogItemService $catalogItemService,
                                $config = [] ){
        $this->catalogItemService = $catalogItemService;
        parent::__construct($id, $module, $catalogItemService, $config);
    }
}