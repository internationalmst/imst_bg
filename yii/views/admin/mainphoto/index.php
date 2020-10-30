<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use kartik\file\FileInput;
use yii\jui\JuiAsset;
/* 
Yii::$app->view->registerMetaTag(['name' => 'category', 'content' => $category->id]); */
$this->registerJsFile('@web/libs/angular/angular.js', ['depends' => [app\assets\admin\Assets::className()]]);
$this->registerJsFile('@web/libs/angular/angular-sanitize.js', ['depends' => [app\assets\admin\Assets::className()]]);
$this->registerCssFile('@web/libs/dropzone/dropzone.css', ['depends' => [app\assets\admin\Assets::className()]]);
$this->registerJsFile('@web/libs/dropzone/dropzone.js', ['depends' => [app\assets\admin\Assets::className()]]);
$this->registerJsFile('@web/admin/js/slider/slider.photos.js', ['depends' => [app\assets\admin\Assets::className()]]);
JuiAsset::register($this);

$this->title = ucfirst("Main Photo");
?>


<div class="content" ng-app="App" ng-controller="controller">
<div class="box">

<div class="clearfix"></div>
  <div class="box-header">
    Upload Image
  </div>
  <div class="box-body">
    <?=
    FileInput::widget([
        'name' => 'imageFile',
        'options'=> [
            'multiple'=> false
        ],
        'pluginOptions' => [
            'uploadUrl' => Url::to('/Xhiddenimstadminurlx/mainphoto/upload-photo'),
            'showPreview' => true,
            'showCaption' => true,
            'showRemove' => false,
            'showUpload' => true,
            'showError' => false
        ]
    ]);
    ?>
  </div>
      <div class="box box-primary" ng-cloak ng-show="mainphoto.length">
        <div class="box-header with-border"><h3 class="box-title">All Photos</h3></div>
        <div class="box-body">
          <ul class="products-list product-list-in-box" >
            <li class="item" ng-repeat="photo in mainphoto" id="photo-{{photo.id}}">
              <div class="product-img">
                <img ng-src="/images/mainphoto/{{photo.photo}}@100x100.jpg">
              </div>
              <div class="product-info">
                  <button class="btn btn-danger pull-right" role="button" ng-click="delete(photo.id)">Delete</button>
              </div>
            </li>
          </ul>
        </div>
      </div>
  </div>
</div>