<?php
namespace backend\helper;

class FormHelper {
    const FormHorizontalFieldOptions =  [
                    'options'=>[
                        'class'=>'form-group'
                    ],
                    'labelOptions'=>[
                        'class'=>'col-sm-2 control-label'
                    ],
                    'template'=>'{label}<div class="col-sm-10">{input}</div><div class="col-sm-10 col-sm-offset-2">{error}</div>'
                ];

    const FormHorizontalCheckboxOptions = [
                    'options'=>[
                        'class'=>'row checkbox'
                    ],
                    'template'=>'{label}<div class="col-sm-offset-2 col-sm-10">{input}</div>{error}'
                ];

    const FormVerticalFieldOptions = [
        'options'=>[
            'class'=>'form-group'
        ],
        'labelOptions'=>[
            'class'=>'control-label'
        ],
        'inputOptions' => [
          'class'=>'form-control'
        ],
        'template'=>'{label}{input}{error}'
    ];
}