<?php

\Yii::$container->set('backend\services\interfaces\IMenuService', 'backend\services\implementations\MenuService');
\Yii::$container->set('backend\services\interfaces\IMenuTypeService', 'backend\services\implementations\MenuTypeService');
\Yii::$container->set('backend\services\interfaces\IMenuItemService', 'backend\services\implementations\MenuItemService');