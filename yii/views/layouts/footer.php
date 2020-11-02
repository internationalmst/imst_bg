<?php

use app\assets\AppAsset;
use yii\helpers\Url;
AppAsset::register($this);
?>
<div class="spacer"></div>

<footer class="">
  <div class="marketing-site-footer">
    <div class="row medium-unstack">
        <div class="column medium-4">
            <?php if($lang=='en'):?>
                <h4 class="marketing-site-footer-name"><?=$texts[4]->title_en?></h4>
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
        <div class="medium-4 column">
            <ul class="vertical menu footer">
            <?php if($lang == 'en'):?>
                <li><a href="<?=Url::base(true)?>/en">Home</a></li>
                <li><a style="color: #555555;" href="<?=Url::base(true)?>/en#services">Services</a></li>
                <li><a href="<?=Url::base(true)?>/en#guarantee">We Guarantee</a></li>
                <li><a href="<?=Url::base(true)?>/en/work-with-us">Work with Us</a></li>
            <?php else:?>
                <li><a href="<?=Url::base(true)?>/rus">Home</a></li>
                <li><a href="<?=Url::base(true)?>/rus#services">Services</a></li>
                <li><a href="<?=Url::base(true)?>/rus#guarantee">We Guarantee</a></li>
                <li><a href="<?=Url::base(true)?>/rus/work-with-us">Work with Us</a></li>
            <?php endif;?>
            </ul>
        </div>
        <div class="medium-4 column">
            <h4 class="marketing-site-footer-title">Contact Info</h4>
            <div class="marketing-site-footer-block">
            <p>yetirules@fakeemail.com</p>
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