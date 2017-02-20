<?php

\Yii::$container->set('backend\services\interfaces\IMenuService', 'backend\services\implementations\MenuService');
\Yii::$container->set('backend\services\interfaces\IMenuTypeService', 'backend\services\implementations\MenuTypeService');
\Yii::$container->set('backend\services\interfaces\IMenuItemService', 'backend\services\implementations\MenuItemService');
\Yii::$container->set('backend\services\interfaces\ISettingsService', 'backend\services\implementations\SettingsService');
\Yii::$container->set('backend\services\interfaces\IItemAttributeMappingService', 'backend\services\implementations\ItemAttributeMappingService');
\Yii::$container->set('backend\services\interfaces\ICatalogItemAttributeService', 'backend\services\implementations\CatalogItemAttributeService');
\Yii::$container->set('backend\services\interfaces\ICatalogItemImageService', 'backend\services\implementations\CatalogItemImageService');
\Yii::$container->set('backend\services\interfaces\ICatalogItemService', 'backend\services\implementations\CatalogItemService');