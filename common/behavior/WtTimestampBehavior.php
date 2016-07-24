<?php
namespace common\behavior;
use yii\behaviors\TimestampBehavior;

/**
 * Override TimestampBehavior attributes
 */
class WtTimestampBehavior extends TimestampBehavior
{

    public $createdAtAttribute = 'createdAt';
    public $updatedAtAttribute = 'updatedAt';
}