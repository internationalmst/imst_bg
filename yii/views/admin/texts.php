<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->registerJs(
<<<JS

(function($) {
  $('#rus_text').redactor({
    plugins: ['source', 'video', 'alignment', 'fontcolor', 'bookingButton', 'hotelBar', 'fullscreen'],
    imageUpload: '/upload/redactor-photo',
    imageUploadParam: 'imageFile',
    imageUploadFields: {
      _csrf: yii.getCsrfToken(),
    },
    imageResizable: true,
    minHeight: 300,
    imagePosition: true,
    autosaveFields: {
      id: 3,
    },
  });
})(jQuery);
(function($) {
  $('#gr_text').redactor({
    plugins: ['source', 'video', 'alignment', 'fontcolor', 'bookingButton', 'hotelBar', 'fullscreen'],
    imageUpload: '/upload/redactor-photo',
    imageUploadParam: 'imageFile',
    imageUploadFields: {
      _csrf: yii.getCsrfToken(),
    },
    imageResizable: true,
    minHeight: 300,
    imagePosition: true,
    autosaveFields: {
      id: 3,
    },
  });
})(jQuery);/* 
$('#gr_text').on('change.callback.redactor', function() {
  Pace.restart();
});
$('#en_text').on('change.callback.redactor', function() {
  Pace.restart();
}); */
JS
);
$this->title = $model->title_en;
?>
<div class="service-update-box">
  <div class="box-body">
    <div class="service-form">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'id')->label(false)->textInput(['class' => 'hide']) ?>
        <div class="col-md-6">
          <label><strong>Title En</strong></label>
          <?= $form->field($model, 'title_en')->label(false)->textInput() ?>
        </div>
        <div class="col-md-6">
          <label><strong>Title Russ</strong></label>
          <?= $form->field($model, 'title_rus')->label(false)->textInput() ?>
        </div>
        <div class="col-md-12">
          <label><strong>Text En</strong></label>
          <?= $form->field($model, 'text_en')->label(false)->textarea(['class' => 'rich', 'id' => 'gr_text', 'rows' => 10]) ?><br>            
          <?=$form->errorSummary($model, ['header' => '']); ?>
        </div>
        <div class="col-md-12">
          <label><strong>Text Russ</strong></label>
          <?= $form->field($model, 'text_rus')->label(false)->textarea(['class' => 'rich', 'id' => 'rus_text', 'rows' => 10]) ?><br>            
          <?=$form->errorSummary($model, ['header' => '']); ?>
          <?= Html::submitButton('Submit', ['class' => 'ui fluid large teal submit button btn btn-primary btn-lg btn-block btn-flat mb-15']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>