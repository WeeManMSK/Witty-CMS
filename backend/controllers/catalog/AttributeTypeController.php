<?php

namespace backend\controllers\catalog;

use backend\controllers\ReferenceController;
use common\services\interfaces\ICatalogItemAttributeTypeService;

class AttributeTypeController extends ReferenceController
{
    private $catalogItemAttributeTypeService;

    public function __construct($id,
                                $module,
                                ICatalogItemAttributeTypeService $catalogItemAttributeTypeService,
                                $config = [] ){
        $this->catalogItemAttributeTypeService = $catalogItemAttributeTypeService;
        parent::__construct($id, $module, $catalogItemAttributeTypeService, $config);
    }
}