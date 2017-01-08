<?php

namespace frontend\services\interfaces;


use common\models\Page;

interface IPageService extends \common\services\interfaces\IPageService
{

    /**
     * @return Page
     */
    public function getIndex() : Page;

    /**
     * @param string $url
     * @return Page
     */
    public function getPage(string $url): Page;
}