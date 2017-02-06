<?php

namespace backend\controllers\catalog;


use backend\controllers\ReferenceController;
use common\services\interfaces\ICatalogItemAttributeGroupService;

class AttributeGroupController extends ReferenceController
{
    private $catalogItemAttributeGroupService;

    public function __construct($id,
                                $module,
                                ICatalogItemAttributeGroupService $catalogItemAttributeGroupService,
                                $config = [] ){
        $this->catalogItemAttributeGroupService = $catalogItemAttributeGroupService;
        parent::__construct($id, $module, $catalogItemAttributeGroupService, $config);
    }
}