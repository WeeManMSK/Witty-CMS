<?php

\Yii::$container->set('frontend\services\interfaces\IPageService', 'frontend\services\implementations\PageService');
\Yii::$container->set('frontend\services\interfaces\IMenuItemService', 'frontend\services\implementations\MenuItemService');
\Yii::$container->set('frontend\services\interfaces\IThemeService', 'frontend\services\implementations\ThemeService');
\Yii::$container->set('frontend\services\interfaces\ISettingsService', 'frontend\services\implementations\SettingsService');
\Yii::$container->set('frontend\services\interfaces\ICatalogItemAttributeGroupService', 'frontend\services\implementations\CatalogItemAttributeGroupService');
\Yii::$container->set('frontend\services\interfaces\ICatalogItemAttributeMappingService', 'frontend\services\implementations\CatalogItemAttributeMappingService');
\Yii::$container->set('frontend\services\interfaces\ICatalogItemAttributeService', 'frontend\services\implementations\CatalogItemAttributeService');
\Yii::$container->set('frontend\services\interfaces\ICatalogItemAttributeTypeService', 'frontend\services\implementations\CatalogItemAttributeTypeService');
\Yii::$container->set('frontend\services\interfaces\ICatalogItemService', 'frontend\services\implementations\CatalogItemService');
\Yii::$container->set('frontend\services\interfaces\ICatalogItemTypeService', 'frontend\services\implementations\CatalogItemTypeService');