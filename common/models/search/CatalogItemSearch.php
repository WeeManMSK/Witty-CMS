<?php
namespace common\models\search;

use common\models\CatalogItem;
use yii\data\ActiveDataProvider;

class CatalogItemSearch
{
    /**
     * @param $params
     * @return ActiveDataProvider
     */
    public function search($params): ActiveDataProvider{
        $query = CatalogItem::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20,
            ],
            'sort' => [
                'defaultOrder' => [
                    'name' => SORT_DESC,
                ]
            ],
        ]);

        return $dataProvider;
    }

    public function searchFull($params)
    {
        $query = CatalogItem::find();
        $query->from('catalog_item as ci');
        $query->join('LEFT JOIN','catalog_item_attribute_mapping as am','am.item_id = ci.id');
        $query->join('LEFT JOIN', 'catalog_item_attribute as a', 'a.id = am.attribute_id');
        $query->where('1=1');

        foreach ($params as $key=>$param){
            $query->andWhere('am.attribute_id='.$key. ' and am.value_boolean='.$param);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20,
            ],
            'sort' => [
                'defaultOrder' => [
                    'name' => SORT_DESC,
                ]
            ],
        ]);

        return $dataProvider;
    }
}