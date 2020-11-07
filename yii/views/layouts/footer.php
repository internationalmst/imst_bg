<?php

use app\assets\AppAsset;
use yii\helpers\Url;
AppAsset::register($this);
?>
<div class="spacer"></div>

<footer class="">
  <div class="marketing-site-footer">
    <div class="row medium-unstack">
        <div class="column medium-4 small-12 text-center">
            <?php if($lang=='en'):?>
                <h4 class="marketing-site-footer-name text"><?=$texts[4]->title_en?></h4>
                <p><?=$texts[4]->text_rus?></p>
                <ul class="menu marketing-site-footer-menu-social simple">
                </ul>
            <?php else:?>
                <h4 class="marketing-site-footer-name"><?=$texts[4]->title_rus?></h4>
                <p><?=$texts[4]->text_rus?></p>
                <ul class="menu marketing-site-footer-menu-social simple">
                </ul>
            <?php endif;?>
        </div>
        <div class="medium-4 small-12 column">
            <ul class="vertical menu footer">
            <?php if($lang == 'en'):?>
                <li><a href="<?=Url::base(true)?>/en">Home</a></li>
                <li><a style="color: #555555;" href="<?=Url::base(true)?>/en#services">Services</a></li>
                <li><a href="<?=Url::base(true)?>/en#guarantee">We Guarantee</a></li>
                <li><a href="<?=Url::base(true)?>/en/work-with-us">Work with Us</a></li>
            <?php else:?>
                <li><a href="<?=Url::base(true)?>/rus">Главная</a></li>
                <li><a href="<?=Url::base(true)?>/rus#services">Услуги</a></li>
                <li><a href="<?=Url::base(true)?>/rus#guarantee">Гарантия качества</a></li>
                <li><a href="<?=Url::base(true)?>/rus/work-with-us">Работа с нами</a></li>
            <?php endif;?>
            </ul>
        </div>
        <div class="medium-4 small-12 column text-center">
          <?php if($lang == 'en'):?>
            <h4 class="marketing-site-footer-title">Contact Info</h4>
          <?php else:?>
            <h4 class="marketing-site-footer-title">Контакты</h4>
          <?php endif;?>
            <div class="marketing-site-footer-block">
            <a href="mailto:info@team-ltd.eu?subject='Contact Team ldt | Website'">info@team-ltd.eu</a>
            </div>
        </div>
    </div>
  </div>
  <div class="marketing-site-footer-bottom">
    <div class="row large-unstack align-middle">
      <div class="column">
        <p>&copy; 2020 IMST All rights are reserved</p>
      </div>
    </div>
  </div>
</footer>