<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\assets\admin\Assets;
Assets::register($this);

?>
<div class="ui middle aligned center aligned grid">
  <div class="column" style="top:150px;">
  <h2 class="ui top attached header image"> <img style="height:120px; width:300px; margin-left: auto; margin-right: auto;" class="lazyload" src="/images/imst_logo.png" class="image"> </h2>
    <div class="ui attached segment">
        <?php $form = ActiveForm::begin([
        'errorSummaryCssClass' => 'alert alert-danger',
        ]); ?>
        <?= $form->field($model, 'username', ['template' => '<div class="ui left icon input form-group has-feedback">{input}<i class="user icon"></i></div>'])
                ->textInput([
                'placeholder' => 'Username',
                'class' => 'form-control', ]) ?><br>
        <?= $form->field($model, 'password', ['template' => '<div class="ui left icon input form-group has-feedback">{input}<i class="lock icon"></i></div>'])
                ->passwordInput([
                'placeholder' => 'Password',
                'class' => 'form-control', ]) ?><br>
        <div class="row">
        <div class="col-xs-12">
            <?=$form->errorSummary($model, ['header' => '']); ?>
        </div>
        <div class="col-xs-12">
            <?= Html::submitButton('Login', ['class' => 'ui fluid large teal submit button btn primary btn-lg btn-block btn-flat mb-15']) ?>
        </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>
<script src="/js/vendor/jquery.js"></script>
<script src="/semantic/semantic.min.js"></script>