<?php
namespace backend\helper;

class ErrorHelper {

    /**
     * @param array $errors
     * @return null|string
     */
    public static function showErrors($errors = []){
        if (count($errors) === 0 ) { 
            return null;
        }

        $blockTitle = ErrorHelper::getBlockTitle();
        $errorsList = ErrorHelper::getErrorsList($errors);
        return sprintf('
            <div class="box box-default">
                <div class="box-header with-border">
                    %s
                </div>
                <div class="box-body">
                    %s
                </div>
            </div>'
            , $blockTitle
            , $errorsList);  
    }

    /**
     * @param string $title
     * @return string
     */
    private function getBlockTitle($title = "Ошибки"){
        return sprintf('
            <i class="fa fa-warning"></i>
            <h3 class="box-title">%s</h3>'
        , $title);
    }

    /**
     * @param $errors
     * @return string
     */
    private function getErrorsList($errors) {
        $errorList = "";
        foreach($errors as $error) { 
            $errorList = $errorList.ErrorHelper::getError($error);
        }

        return $errorList;
    }

    /**
     * @param $error
     * @return string
     */
    private function getError($error){
        return sprintf('
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Ошибка сохранения!</h4>
                %s
            </div>'
        , $error[0]);
    }
}