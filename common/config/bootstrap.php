<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');

$http = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

Yii::setAlias('@main-domain', $http.str_replace("backend.", "", $_SERVER['HTTP_HOST']));

\Yii::$container->set('common\services\interfaces\IBlogService', 'common\services\implementations\BlogService');
\Yii::$container->set('common\services\interfaces\IPageService', 'common\services\implementations\PageService');
\Yii::$container->set('common\services\interfaces\IMenuService', 'common\services\implementations\MenuService');
\Yii::$container->set('common\services\interfaces\IMenuTypeService', 'common\services\implementations\MenuTypeService');
\Yii::$container->set('common\services\interfaces\IMenuItemService', 'common\services\implementations\MenuItemService');
\Yii::$container->set('common\services\interfaces\ISettingsService', 'common\services\implementations\SettingsService');
\Yii::$container->set('common\services\interfaces\IThemeService', 'common\services\implementations\ThemeService');
\Yii::$container->set('common\services\interfaces\IFaqService', 'common\services\implementations\FaqService');
\Yii::$container->set('common\services\interfaces\IFaqHeaderService', 'common\services\implementations\FaqHeaderService');
\Yii::$container->set('common\services\interfaces\IFaqLineService', 'common\services\implementations\FaqLineService');
\Yii::$container->set('common\services\interfaces\ICatalogItemTypeService', 'common\services\implementations\CatalogItemTypeService');
\Yii::$container->set('common\services\interfaces\ICatalogItemService', 'common\services\implementations\CatalogItemService');
\Yii::$container->set('common\services\interfaces\ICatalogItemAttributeService', 'common\services\implementations\CatalogItemAttributeService');
\Yii::$container->set('common\services\interfaces\ICatalogItemAttributeTypeService', 'common\services\implementations\CatalogItemAttributeTypeService');
\Yii::$container->set('common\services\interfaces\ICatalogItemAttributeGroupService', 'common\services\implementations\CatalogItemAttributeGroupService');
\Yii::$container->set('common\services\interfaces\IItemAttributeMappingService', 'common\services\implementations\ItemAttributeMappingService');
\Yii::$container->set('common\services\interfaces\ICatalogItemImageService', 'common\services\implementations\CatalogItemImageService');