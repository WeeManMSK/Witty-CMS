<?php

namespace frontend\services\implementations;

use common\models\Page;
use frontend\services\interfaces\IPageService;
use yii\web\NotFoundHttpException;

class PageService extends \common\services\implementations\PageService implements IPageService
{

    /**
     * @return Page
     * @throws NotFoundHttpException
     */
    public function getIndex() : Page
    {
        $page = Page::findOne(['is_index'=>true]);
        if ($page === null){
            throw new NotFoundHttpException();
        }

        return $page;
    }
}