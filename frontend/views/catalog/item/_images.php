<?php
/**
 * @var $this \yii\web\View
 * @var $item \common\models\CatalogItem
 */
?>

<?php
$items = [
    [
        'url' => 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_b.jpg',
        'src' => 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_s.jpg',
        'options' => array('title' => 'Camposanto monumentale (inside)') ]
];
//foreach ($item->images as $image){
//    array_push($items, [
//        'url' => 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_b.jpg',
//        'src' => 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_s.jpg',
//        'options' => array('title' => 'Camposanto monumentale (inside)')
//    ]);
//}

?>
<?= dosamigos\gallery\Gallery::widget(['items' => $items]);?>