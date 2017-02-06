<?php

namespace backend\controllers\catalog;


use backend\controllers\ReferenceController;
use common\services\interfaces\ICatalogItemAttributeService;

class AttributeController extends ReferenceController
{
    private $catalogItemAttributeService;

    public function __construct($id,
                                $module,
                                ICatalogItemAttributeService $catalogItemAttributeService,
                                $config = [] ){
        $this->catalogItemAttributeService = $catalogItemAttributeService;
        parent::__construct($id, $module, $catalogItemAttributeService, $config);
    }
}