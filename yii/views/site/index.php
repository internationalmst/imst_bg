<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Team-ltd | B2B localization services';
?>

<?php $this->beginContent('@app/views/layouts/menu.php', [
  'lang' => $lang
]); ?>
<?php $this->endContent(); ?>

<!-- START SLIDER WITH DATA -->
<div class="show-for-medium orbit orbit-slider m_t_for_medium_180" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
  <ul class="orbit-container">
    <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
    <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
    <?php $count=0; foreach($slider as $photo):?>
    <?php if($count == 0) :?><li class="orbit-slide is-active"><?php else:?><li class="orbit-slide"><?php endif;?>
      <div id="title" class="container">
      <?php if($lang=='en'):?>
        <h1><?=$texts[4]->title_en?></h1>
        <h6 class="subheader"><?=$texts[4]->text_en?></h6>
      <?php else:?>
        <h1><?=$texts[4]->title_rus?></h1>
        <h6 class="subheader"><?=$texts[4]->text_rus?></h6>
      <?php endif;?>
      </div>
      <img class="lazyload" src="/images/slider/<?=$photo->photo?>@1024.jpg">
    </li>
    <?php endforeach;?>
  </ul>
</div>

<div class="show-for-small-only orbit orbit-slider m_t_for_medium_180" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
  <ul class="orbit-container">
    <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
    <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
    <?php $count=0; foreach($slider as $photo):?>
    <?php if($count == 0) :?><li class="orbit-slide is-active"><?php else:?><li class="orbit-slide"><?php endif;?>
      <img class="lazyload" src="/images/slider/<?=$photo->photo?>@600x250.jpg">
    </li>
    <?php endforeach;?>
  </ul>
</div>

<div class="spacer"></div>

<div class="row">
  <div class="column large-8 small-12">
    <?php if($lang=='en'):?>
    <?php $counter = 0; foreach($texts as $text):?>
      <?php if ($counter > 3):?>
        <?php break;?>
      <?php endif;?>
      <?php $counter = $counter +1;?>
    <div class="row">
      <h2 id="company" class="text-center m_b_20"><?=$text->title_en?></h2>
      <p <?php if($text->id==3):?> id="guarantee"<?php endif;?>><?=$text->text_en?></p>
    </div>
    <?php endforeach;?>
    <?php else:?>
    <?php $counter = 0; foreach($texts as $text):?>
      <?php if ($counter > 3):?>
        <?php break;?>
      <?php endif;?>
      <?php $counter = $counter +1;?>
    <div class="row">
      <h2 id="company" class="text-center m_b_20"><?=$text->title_rus?></h2>
      <p <?php if($text->id==3):?> id="guarantee"<?php endif;?>><?=$text->text_rus?></p>
    </div>
    <?php endforeach;?>
    <?php endif;?>
    <div class="spacer"></div>
    <div class="spacer"></div>

    <?php if($lang=='en'):?>
    <div class="row small-up-2 large-up-3" data-equalizer>
      <div class="column">
        <h5 data-open="modalreveal-1" class="border_blue p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[0]->title_en?></h5>
      </div>
      <div class="column">
        <h5 data-open="modalreveal-2" class="border_green p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[1]->title_en?></h5>
      </div>
      <div class="column">
        <h5 data-open="modalreveal-3" class="border_red p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[2]->title_en?></h5>
      </div>
      <div class="column">
        <h5 data-open="modalreveal-4" class="border_warning p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[3]->title_en?></h5>
      </div>
      <div class="column">
        <h5 data-open="modalreveal-5" class="border_danger p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[4]->title_en?></h5>
      </div>
      <div class="column">
        <h5 data-open="modalreveal-6" class="border_primary p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[5]->title_en?></h5>
      </div>
      <div class="column">
        <h5 data-open="modalreveal-7" class="border_secondary p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[6]->title_en?></h5>
      </div>
      <div class="column">
        <h5 data-open="modalreveal-8" class="border_info p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[7]->title_en?></h5>
      </div>
      <div class="column">
        <h5 id="services" data-open="modalreveal-8" class="border_green p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[8]->title_en?></h5>
      </div>
    </div>
    <?php else:?>
    <div class="row small-up-2 large-up-3" data-equalizer>
      <div class="column">
        <h5 data-open="modalreveal-1" class="border_blue p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[0]->title_rus?></h5>
      </div>
      <div class="column">
        <h5 data-open="modalreveal-2" class="border_green p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[1]->title_rus?></h5>
      </div>
      <div class="column">
        <h5 data-open="modalreveal-3" class="border_red p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[2]->title_rus?></h5>
      </div>
      <div class="column">
        <h5 data-open="modalreveal-4" class="border_warning p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[3]->title_rus?></h5>
      </div>
      <div class="column">
        <h5 data-open="modalreveal-5" class="border_danger p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[4]->title_rus?></h5>
      </div>
      <div class="column">
        <h5 data-open="modalreveal-6" class="border_primary p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[5]->title_rus?></h5>
      </div>
      <div class="column">
        <h5 data-open="modalreveal-7" class="border_secondary p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[6]->title_rus?></h5>
      </div>
      <div class="column">
        <h5 data-open="modalreveal-8" class="border_info p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[7]->title_rus?></h5>
      </div>
      <div class="column">
        <h5 id="services" data-open="modalreveal-8" class="border_green p_50 button_box text-center cursor-pointer" data-equalizer-watch><?=$guarantees[8]->title_rus?></h5>
      </div>
    </div>
    <?php endif;?>
    <div class="spacer"></div>

    <div class="row">
    <?php if($lang=='en'):?>
      <h2 id="services" class="text-center m_b_20">Services</h2>
    <?php else:?>
      <h2 id="services" class="text-center m_b_20">Услуги</h2>
    <?php endif;?>
    </div>
    <div class="row small-up-2 large-up-2" data-equalizer>
      <?php foreach($services as $service):?>
        <div class="column">
          <div class="border_wrapper" data-equalizer-watch>
            <?php if($lang=='en'):?>
            <h5><?=$service->title_en?></h5>
            <p><?=$service->text_en?></p>
            <?php else:?>
            <h5><?=$service->title_rus?></h5>
            <p><?=$service->text_rus?></p>
            <?php endif;?>
          </div>
          <div class="small_spacer"></div>
        </div>
      <?php endforeach;?>
    </div>
  </div>
  <div class="column large-offset-1 large-3 small-12">
    <img src="images/LOGO_Team.png" alt="imst_basic">
    <div class="spacer"></div>
    <img src="images/green-policy.png" alt="imst_basic">
    <div class="spacer"></div>

    <div class="sidebar-widget sidebar-widget--subscribe noLinks">
      <?php if($lang=='en'):?>
      <h3 class="subscribe__heading">Stay Updated</h3>
      <p class="wp-chimp-description">Subscribe to our newsletter and stay updated for more job aportunities.</p>
      <?php else:?>
      <h3 class="subscribe__heading">Новости компании</h3>
      <p class="wp-chimp-description">Подпишитесь на нашу рассылку и будьте в курсе о новых вакансиях.</p>
      <?php endif;?>
      <div class="wp-chimp-block">
        <?php $form = ActiveForm::begin([
            'options' => [
                'class' => 'wp-chimp-form',
            ]
        ]);?>
          <fieldset class="wp-chimp-form__fieldset">
            <p class="wp-chimp-field">
                <?= $form->field($model, 'email')->textInput(['class'=>'wp-chimp-input wp-chimp-input--email', 'type'=> 'email', 'placeholder' => 'Insert email address'])->label(false);?>
            </p>
          </fieldset>
          <p class="wp-chimp-form__submit">
              <?= Html::submitButton('Subscribe', ['class' => 'button button-primary'])?>
          </p>
        <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>
<?php if($lang=='en'):?>
<?php foreach($guarantees as $guarantee):?>
  <div class="reveal" id="modalreveal-<?=$guarantee->id?>" data-reveal data-animation-in="fade-in" data-animation-out="fade-out" data-close-on-esc>
    <h3><?=$guarantee->title_en?></h3>
    <p><?=$guarantee->text_en?></p>
    <button class="close-button" data-close aria-label="Close modal" type="button"><span aria-hidden="true">&times;</span></button>
  </div>
<?php endforeach;?>
<?php else:?>
<?php foreach($guarantees as $guarantee):?>
  <div class="reveal" id="modalreveal-<?=$guarantee->id?>" data-reveal data-animation-in="fade-in" data-animation-out="fade-out" data-close-on-esc>
    <h3><?=$guarantee->title_rus?></h3>
    <p><?=$guarantee->text_rus?></p>
    <button class="close-button" data-close aria-label="Close modal" type="button"><span aria-hidden="true">&times;</span></button>
  </div>
<?php endforeach;?>
<?php endif;?>
<?php $this->beginContent('@app/views/layouts/footer.php', [
  'lang' => $lang,
  'texts' => $texts
]); ?>
<?php $this->endContent(); ?>

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/what-input/dist/what-input.js"></script>
<script src="node_modules/foundation-sites/dist/js/foundation.js"></script>
<script src="js/app.js"></script>