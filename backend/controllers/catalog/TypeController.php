<?php

namespace backend\controllers\catalog;

use backend\controllers\ReferenceController;
use common\services\interfaces\ICatalogItemTypeService;

class TypeController extends ReferenceController
{
    private $catalogItemTypeService;

    public function __construct($id,
                                $module,
                                ICatalogItemTypeService $catalogItemTypeService,
                                $config = [] ){
        $this->catalogItemTypeService = $catalogItemTypeService;
        parent::__construct($id, $module, $catalogItemTypeService, $config);
    }
}