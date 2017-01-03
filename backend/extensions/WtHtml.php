<?php

namespace backend\extensions;


class WtHtml extends \common\extensions\WtHtml
{
    public static function aAsButton($text, $url = null, $options = [])
    {
        $options['class'] = isset($options['btnType']) ? 'btn btn-sm btn-'.$options['btnType'] : 'btn btn-sm btn-default';
        $resultText = sprintf("<i class='%s'></i> %s", $options['iconClass'], $text);
        return parent::a($resultText, $url, $options);
    }

    public static function backToIndexButton()
    {
        $text = "Back";
        $url = ['index'];
        $options = [
            'iconClass'=>'fa fa-angle-double-left'
        ];
        return WtHtml::aAsButton($text, $url, $options);
    }

    public static function saveButton($content = 'Save', $options = [])
    {
        $options['type'] = 'submit';
        $options['class'] = 'btn btn-sm btn-primary';
        return static::button($content, $options);
    }
}