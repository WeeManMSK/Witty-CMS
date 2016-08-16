<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJs("
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%'
    });
  });")
?>
<div class="login-box">
    <div class="login-logo">
        <b>Witty</b> Admin Panel
    </div>
    <div>
        <?= \common\widgets\Alert::widget(); ?>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Fill the login and password fields</p>
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
        <?= $form
            ->field($model, 'username', [
                'template' => '{input}<span class="glyphicon glyphicon-envelope form-control-feedback"></span>',
                'options' => [
                    'class' => 'form-group has-feedback'
                ]
            ])
            ->textInput(
                [
                    'autofocus' => true,
                    'placeholder' => 'Login'
                ]
            )
        ?>
        <?= $form
            ->field($model, 'password', [
                'template' => '{input}<span class="glyphicon glyphicon-lock form-control-feedback"></span>',
                'options' => [
                    'class' => 'form-group has-feedback'
                ]
            ])
            ->passwordInput([
                'placeholder' => 'Password'
            ])
        ?>
        <div class="row">
            <div class="col-xs-8">
                <?= $form
                    ->field($model, 'rememberMe', [
                        'options'=> [
                            'class' => null
                        ]
                    ])
                    ->checkbox() ?>
            </div>
            <div class="col-xs-4">
                <?= Html::submitButton('Sign in', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>