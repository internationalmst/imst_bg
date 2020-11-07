<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\web\View;

AppAsset::register($this);
?>
    <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="d-flex align-items-center">
        <i class="icofont-envelope"></i>Email: csavvas@imast.gr
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="">
    <div class="container d-flex align-items-center">

      <a href="<?=Url::base(true)?>" class="logo mr-auto">Imst Logo<!-- <img src="assets/img/logo.png" alt=""> --></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?=Url::base(true)?>">Home</a></li>
          <li><a href="<?=Url::base(true)?><?php if($lang == 'en'):?>/en<?php else:?>/russ#services"<?php endif;?>>Services</a></li>
          <li><a href="<?=Url::base(true)?><?php if($this->view->params['language'] == 'en'):?>/en<?php else:?>/russ#guarantee"<?php endif;?>>We Guarantee</a></li>
          <li><a href="<?=Url::base(true)?><?php if($this->view->params['language'] == 'en'):?>/en<?php else:?>/russ/work-with-us"<?php endif;?>>Work with Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
<div class="clearfix"></div>
<!-- End Top Bar -->

  <?= $content ?>

<?php $this->endBody() ?>

<script src="/node_modules/jquery/dist/jquery.js"></script>
<script src="/node_modules/what-input/dist/what-input.js"></script>
<script src="/node_modules/foundation-sites/dist/js/foundation.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
<?php $this->endPage() ?>
