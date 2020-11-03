<?php

use app\assets\AppAsset;
use yii\helpers\Url;
AppAsset::register($this);
?>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center ">
    <div class="container d-flex align-items-center">
      <div class="d-flex align-items-center">
        <i class="icofont-envelope"></i>Email: imst@imst.gr
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="">
    <div class="container d-flex align-items-center">
      <?php if($lang == 'en'):?>
        <a href="<?=Url::base(true)?>/en" class="logo mr-auto"><img style="width:300px;" src="images/LOGO_Team_Name.png" alt=""></a>
      <?php else:?>
        <a href="<?=Url::base(true)?>/rus" class="logo mr-auto"><img style="width:300px;" src="images/LOGO_Team_Name.png" alt=""></a>
      <?php endif;?>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <?php if($lang == 'en'):?>
            <li class="active"><a href="<?=Url::base(true)?>/en">Home</a></li>
            <li><a href="<?=Url::base(true)?>/en#services">Services</a></li>
            <li><a href="<?=Url::base(true)?>/en#guarantee">We Guarantee</a></li>
            <li><a href="<?=Url::base(true)?>/en/work-with-us">Work with Us</a></li>
            <li style="display: flex;"><a href="<?=$this->params['changeLanguages'][0]['url']?>">En&nbsp;</a> / <a href="<?=$this->params['changeLanguages'][1]['url']?>">&nbsp;Rus</a></li>
        <?php else:?>
            <li class="active"><a href="<?=Url::base(true)?>/rus">Главная</a></li>
            <li><a href="<?=Url::base(true)?>/rus#services">Услуги</a></li>
            <li><a href="<?=Url::base(true)?>/rus#guarantee">Гарантия качества</a></li>
            <li><a href="<?=Url::base(true)?>/rus/work-with-us">Работа с нами</a></li>
            <li style="display: flex;"><a href="<?=$this->params['changeLanguages'][0]['url']?>">En&nbsp;</a> / <a href="<?=$this->params['changeLanguages'][1]['url']?>">&nbsp;Rus</a></li>
        <?php endif;?>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
<div class="clearfix"></div>