<?php

use app\assets\AppAsset;
use yii\helpers\Url;
AppAsset::register($this);
?>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center">
      <div class="d-flex align-items-center">
        <i class="icofont-envelope"></i>Email: csavvas@imast.gr
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="<?=Url::base(true)?>" class="logo mr-auto">Imst Logo<!-- <img src="assets/img/logo.png" alt=""> --></a>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <?php if($lang == 'en'):?>
            <li class="active"><a href="<?=Url::base(true)?>/en">Home</a></li>
            <li><a href="<?=Url::base(true)?>/en#services">Services</a></li>
            <li><a href="<?=Url::base(true)?>/en#guarantee">We Guarantee</a></li>
            <li><a href="<?=Url::base(true)?>/en/work-with-us">Work with Us</a></li>
            <li style="display: flex;"><a href="<?=$this->params['changeLanguages'][0]['url']?>">En&nbsp;</a> / <a href="<?=$this->params['changeLanguages'][1]['url']?>">&nbsp;Rus</a></li>
        <?php else:?>
            <li class="active"><a href="<?=Url::base(true)?>/rus">Home</a></li>
            <li><a href="<?=Url::base(true)?>/rus#services">Services</a></li>
            <li><a href="<?=Url::base(true)?>/rus#guarantee">We Guarantee</a></li>
            <li><a href="<?=Url::base(true)?>/rus/work-with-us">Work with Us</a></li>
            <li style="display: flex;"><a href="<?=$this->params['changeLanguages'][0]['url']?>">En&nbsp;</a> / <a href="<?=$this->params['changeLanguages'][1]['url']?>">&nbsp;Rus</a></li>
        <?php endif;?>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
<div class="clearfix"></div>