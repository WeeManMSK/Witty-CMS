<?php

\Yii::$container->set('frontend\services\interfaces\IPageService', 'frontend\services\implementations\PageService');
\Yii::$container->set('frontend\services\interfaces\IMenuItemService', 'frontend\services\implementations\MenuItemService');
\Yii::$container->set('frontend\services\interfaces\IThemeService', 'frontend\services\implementations\ThemeService');
\Yii::$container->set('frontend\services\interfaces\ISettingsService', 'frontend\services\implementations\SettingsService');