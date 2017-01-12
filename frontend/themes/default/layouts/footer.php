<?php
use yii\widgets\Menu;

/**
 * @var $this \yii\web\View
 * @var $menuService \frontend\services\interfaces\IMenuItemService
 */
?>
<footer class="footer">
    <div class="footer-widget-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                        <div class="footer-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Witty CMS - light content management system base on Yii framework 2.0</p>
                    </div>
                </div>
                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                        <h3>Good choice with simple design</h3>
                        <p>Many features with simple realization</p>
                    </div>
                </div>
                <div class="col-sm-4 footer-block last">
                    <div class="footer-widget widget_text">
                        <h3>Contact Us</h3>
                        <address>
                            Call Us <br>
                            Send an Email on <a href="mailto:#">witty@wit-style.ru</a><br>
                        </address>
                        <ul class="list-inline social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-vk"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-section">
        <div class="container clearfix">
            <span class="copytext">&copy; Witty CMS. Demo site <?= date('Y') ?> | <?= Yii::powered() ?></span>
            <?= Menu::widget([
                'items' => $menuService->getItems(\common\models\MenuType::FOOTER),
                'encodeLabels' => false,
                'options'=> [
                    'class'=>'list-inline pull-right'
                ],
                'submenuTemplate' => "\n<ul class='dropdown-menu'>\n{items}\n</ul>\n"
            ]);?>
        </div>
    </div>
</footer>

