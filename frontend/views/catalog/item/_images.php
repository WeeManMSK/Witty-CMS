<?php
/**
 * @var $this \yii\web\View
 * @var $item \common\models\CatalogItem
 */
?>

<?php
$items = [];
foreach ($item->images as $image){
    array_push($items, [
        'url' => $image->image_url,
        'src' => $image->image_url,
        'options' => [
            'width'=>100,
            'title' => $image->title
        ]
    ]);
}

?>
<?= dosamigos\gallery\Gallery::widget(['items' => $items]);?>