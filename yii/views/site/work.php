<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'MST International';
?>

<?php $this->beginContent('@app/views/layouts/menu.php', [
  'lang' => $lang
]); ?>
<?php $this->endContent(); ?>

<!-- START SLIDER WITH DATA -->
<div class="show-for-medium orbit orbit-slider m_t_for_medium_180" role="region" aria-label="Favorite Space Pictures" data-orbit data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
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

<div class="show-for-small-only orbit orbit-slider m_t_for_medium_180" role="region" aria-label="Favorite Space Pictures" data-orbit data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
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
    <h3 class="text-center">WORK OPPORTUNITIES WITH INTERNATIONAL MST</h3>
    <p class="text-center">If you are interested in working with INTERNATIONAL mst as a translator, a reviewer, a researcher, a graphic arts specialist, desk-top publisher, web designer specialist or typist/data entry specialist, please fill in the following questionnaire and send it to us. </p>
</div>

<div class="spacer"></div>
<div class="row">
    <h4 class="text-center">-- QUESTIONNAIRE --</h4><br>
    <div class="columns medium-8 medium-offset-2">
<?php $form = ActiveForm::begin();?>
    <h6><b>- PERSONAL DATA</b></h6>
    <div class="columns medium-6">
        <label>Name
            <?= $form->field($model,'name')->textInput(['type' => 'string', 'placeholder' => 'Use latin characters'])->label(false);?><!-- 
            <input type="text" placeholder="Use latin characters"/> -->
        </label>
    </div>
    <div class="columns medium-6">
        <label>Surname
            <?= $form->field($model,'surname')->textInput(['type' => 'string', 'placeholder' => 'Use latin characters'])->label(false);?>
        </label>
    </div>

    <div class="spacer"></div>
    
    <h6><b>- CONTACT INFORMATION</b></h6>
    <div class="columns medium-6">
        <label>Country of Residence
            <?= $form->field($model, 'country')->dropDownList([
                'Afghanistan' => 'Afghanistan',
                'Albania' => 'Albania',
                'Algeria' => 'Algeria',
                'American Samoa' => 'American Samoa',
                'Andorra' => 'Andorra',
                'Angola' => 'Angola',
                'Antigua and Barbuda' => 'Antigua and Barbuda',
                'Argentina' => 'Argentina',
                'Armenia' => 'Armenia',
                'Aruba' => 'Aruba',
                'Australia' => 'Australia',
                'Austria' => 'Austria',
                'Azerbaijan' => 'Azerbaijan',
                'Bahamas' => 'Bahamas',
                'Bahrain' => 'Bahrain',
                'Bangladesh' => 'Bangladesh',
                'Barbados' => 'Barbados',
                'Belarus' => 'Belarus',
                'Belgium' => 'Belgium',
                'Belize' => 'Belize',
                'Benin' => 'Benin',
                'Bermuda' => 'Bermuda',
                'Bhutan' => 'Bhutan',
                'Bolivia' => 'Bolivia',
                'Bosnia and Herzegovina' => 'Bosnia and Herzegovina',
                'Botswana' => 'Botswana',
                'Brazil' => 'Brazil',
                'British Virgin Islands' => 'British Virgin Islands',
                'Brunei Darussalam' => 'Brunei Darussalam',
                'Bulgaria' => 'Bulgaria',
                'Burkina Faso' => 'Burkina Faso',
                'Burundi' => 'Burundi',
                'Cambodia' => 'Cambodia',
                'Cameroon' => 'Cameroon',
                'Canada' => 'Canada',
                'Cape Verde' => 'Cape Verde',
                'Cayman Islands' => 'Cayman Islands',
                'Central African Republic' => 'Central African Republic',
                'Chad' => 'Chad',
                'Channel Islands' => 'Channel Islands',
                'Chile' => 'Chile',
                'China' => 'China',
                'Colombia' => 'Colombia',
                'Comoros' => 'Comoros',
                'Congo' => 'Congo',
                'Cook Islands' => 'Cook Islands',
                'Costa Rica' => 'Costa Rica',
                'Cote d�Ivoire' => 'Cote d�Ivoire',
                'Croatia' => 'Croatia',
                'Cuba' => 'Cuba',
                'Cyprus' => 'Cyprus',
                'Czech Republic' => 'Czech Republic',
                'Dem. People�s Rep. of Korea' => 'Dem. People�s Rep. of Korea',
                'Dem. Republic of the Congo' => 'Dem. Republic of the Congo',
                'Denmark' => 'Denmark',
                'Djibouti' => 'Djibouti',
                'Dominica' => 'Dominica',
                'Dominican Republic' => 'Dominican Republic',
                'Ecuador' => 'Ecuador',
                'Egypt' => 'Egypt',
                'El Salvador' => 'El Salvador',
                'Equatorial Guinea' => 'Equatorial Guinea',
                'Eritrea' => 'Eritrea',
                'Estonia' => 'Estonia',
                'Ethiopia' => 'Ethiopia',
                'Faeroe Islands' => 'Faeroe Islands',
                'Falkland Islands (Malvinas)' => 'Falkland Islands (Malvinas)',
                'Fed. States of Micronesia' => 'Fed. States of Micronesia',
                'Fiji' => 'Fiji',
                'Finland' => 'Finland',
                'France' => 'France',
                'French Guiana' => 'French Guiana',
                'French Polynesia' => 'French Polynesia',
                'Gabon' => 'Gabon',
                'Gambia' => 'Gambia',
                'Georgia' => 'Georgia',
                'Germany' => 'Germany',
                'Ghana' => 'Ghana',
                'Gibraltar' => 'Gibraltar',
                'Greece' => 'Greece',
                'Greenland' => 'Greenland',
                'Grenada' => 'Grenada',
                'Guadeloupe' => 'Guadeloupe',
                'Guam' => 'Guam',
                'Guatemala' => 'Guatemala',
                'Guinea' => 'Guinea',
                'Guinea-Bissau' => 'Guinea-Bissau',
                'Guyana' => 'Guyana',
                'Haiti' => 'Haiti',
                'Holy See' => 'Holy See',
                'Honduras' => 'Honduras',
                'Hong Kong' => 'Hong Kong',
                'Hungary' => 'Hungary',
                'Iceland' => 'Iceland',
                'India' => 'India',
                'Indonesia' => 'Indonesia',
                'Iran' => 'Iran',
                'Iraq' => 'Iraq',
                'Ireland' => 'Ireland',
                'Isle of Man' => 'Isle of Man',
                'Israel' => 'Israel',
                'Italy' => 'Italy',
                'Jamaica' => 'Jamaica',
                'Japan' => 'Japan',
                'Johnston Island' => 'Johnston Island',
                'Jordan' => 'Jordan',
                'Kazakhstan' => 'Kazakhstan',
                'Kenya' => 'Kenya',
                'Kiribati' => 'Kiribati',
                'Kuwait' => 'Kuwait',
                'Kyrgyzstan' => 'Kyrgyzstan',
                'Lao People�s Dem. Republic' => 'Lao People�s Dem. Republic',
                'Latvia' => 'Latvia',
                'Lebanon' => 'Lebanon',
                'Lesotho' => 'Lesotho',
                'Liberia' => 'Liberia',
                'Libyan Arab Jamahiriya' => 'Libyan Arab Jamahiriya',
                'Liechtenstein' => 'Liechtenstein',
                'Lithuania' => 'Lithuania',
                'Luxembourg' => 'Luxembourg',
                'Macao' => 'Macao',
                'China' => 'China',
                'Madagascar' => 'Madagascar',
                'Malawi' => 'Malawi',
                'Malaysia' => 'Malaysia',
                'Maldives' => 'Maldives',
                'Mali' => 'Mali',
                'Malta' => 'Malta',
                'Marshall Islands' => 'Marshall Islands',
                'Martinique' => 'Martinique',
                'Mauritania' => 'Mauritania',
                'Mauritius' => 'Mauritius',
                'Mexico' => 'Mexico',
                'Monaco' => 'Monaco',
                'Mongolia' => 'Mongolia',
                'Montserrat' => 'Montserrat',
                'Morocco' => 'Morocco',
                'Mozambique' => 'Mozambique',
                'Myanmar' => 'Myanmar',
                'Namibia' => 'Namibia',
                'Nauru' => 'Nauru',
                'Nepal' => 'Nepal',
                'Netherlands' => 'Netherlands',
                'Netherlands Antilles' => 'Netherlands Antilles',
                'New Caledonia' => 'New Caledonia',
                'New Zealand' => 'New Zealand',
                'Nicaragua' => 'Nicaragua',
                'Niger' => 'Niger',
                'Nigeria' => 'Nigeria',
                'Niue' => 'Niue',
                'Norfolk Island' => 'Norfolk Island',
                'Northern Mariana Islands' => 'Northern Mariana Islands',
                'Norway' => 'Norway',
                'Occupied Palestinian Territory' => 'Occupied Palestinian Territory',
                'Oman' => 'Oman',
                'Pakistan' => 'Pakistan',
                'Palau' => 'Palau',
                'Panama' => 'Panama',
                'Papua New Guinea' => 'Papua New Guinea',
                'Paraguay' => 'Paraguay',
                'Peru' => 'Peru',
                'Philippines' => 'Philippines',
                'Pitcairn' => 'Pitcairn',
                'Poland' => 'Poland',
                'Portugal' => 'Portugal',
                'Puerto Rico' => 'Puerto Rico',
                'Qatar' => 'Qatar',
                'Republic of Korea' => 'Republic of Korea',
                'Republic of Moldova' => 'Republic of Moldova',
                'Reunion' => 'Reunion',
                'Romania' => 'Romania',
                'Russian Federation' => 'Russian Federation',
                'Rwanda' => 'Rwanda',
                'Saint Helena' => 'Saint Helena',
                'Saint Kitts and Nevis' => 'Saint Kitts and Nevis',
                'Saint Lucia' => 'Saint Lucia',
                'Saint Pierre and Miquelon' => 'Saint Pierre and Miquelon',
                'Saint Vincent and Grenadines' => 'Saint Vincent and Grenadines',
                'Samoa' => 'Samoa',
                'San Marino' => 'San Marino',
                'Sao Tome and Principe' => 'Sao Tome and Principe',
                'Saudi Arabia' => 'Saudi Arabia',
                'Senegal' => 'Senegal',
                'Seychelles' => 'Seychelles',
                'Sierra Leone' => 'Sierra Leone',
                'Singapore' => 'Singapore',
                'Slovakia' => 'Slovakia',
                'Slovenia' => 'Slovenia',
                'Solomon Islands' => 'Solomon Islands',
                'Somalia' => 'Somalia',
                'South Africa' => 'South Africa',
                'Spain' => 'Spain',
                'Sri Lanka' => 'Sri Lanka',
                'Sudan' => 'Sudan',
                'Suriname' => 'Suriname',
                'Swaziland' => 'Swaziland',
                'Sweden' => 'Sweden',
                'Switzerland' => 'Switzerland',
                'Syrian Arab Republic' => 'Syrian Arab Republic',
                'Tajikistan' => 'Tajikistan',
                'Thailand' => 'Thailand',
                'The Former Yugoslav Republic of Macedonia' => 'The Former Yugoslav Republic of Macedonia',
                'Timor-Leste' => 'Timor-Leste',
                'Togo' => 'Togo',
                'Tokelau' => 'Tokelau',
                'Tonga' => 'Tonga',
                'Trinidad and Tobago' => 'Trinidad and Tobago',
                'Tunisia' => 'Tunisia',
                'Turkey' => 'Turkey',
                'Turkmenistan' => 'Turkmenistan',
                'Turks and Caicos Islands' => 'Turks and Caicos Islands',
                'Tuvalu' => 'Tuvalu',
                'Uganda' => 'Uganda',
                'Ukraine' => 'Ukraine',
                'United Arab Emirate' => 'United Arab Emirate',
                'United Kingdom' => 'United Kingdom',
                'United Rep. of Tanzania' => 'United Rep. of Tanzania',
                'United States of America' => 'United States of America',
                'United States Virgin Islands' => 'United States Virgin Islands',
                'Uruguay' => 'Uruguay',
                'Uzbekistan' => 'Uzbekistan',
                'Vanuatu' => 'Vanuatu',
                'Venezuela' => 'Venezuela',
                'Viet Nam' => 'Viet Nam',
                'Wallis and Futuna Islands' => 'Wallis and Futuna Islands',
                'Western Sahara' => 'Western Sahara',
                'Yemen' => 'Yemen',
                'Yugoslavia' => 'Yugoslavia',
                'Zambia' => 'Zambia',
                'Zimbabwe' => 'Zimbabwe',
            ],
            ['prompt' => 'Select Country']
            )->label(false);?>
        </label>
    </div>
    <div class="columns medium-6">
        <label>
            Prefecture
            <?= $form->field($model,'prefecture')->textInput(['type' => 'string', 'placeholder' => 'Use latin characters'])->label(false);?>
        </label>
    </div>
    <div class="columns medium-6">
        <label>
            City/Town
            <?= $form->field($model,'city')->textInput(['type' => 'string', 'placeholder' => 'Use latin characters'])->label(false);?>
        </label>
    </div>
    <div class="columns medium-6">
        <label>
            Postal address
            <?= $form->field($model,'postal_address')->textInput(['type' => 'string', 'placeholder' => 'Use latin characters'])->label(false);?>
        </label>
    </div>
    <div class="columns medium-6">
        <label>
            Postal code
            <?= $form->field($model,'postal_code')->textInput(['type' => 'integer'])->label(false);?>
        </label>
    </div>
    <div class="columns medium-6">
        <label>
            E-mail
            <?= $form->field($model,'email')->textInput(['type' => 'string', 'placeholder' => 'Use latin characters'])->label(false);?>
        </label>
    </div>
    <div class="columns medium-6">
        <label>
            Fixed telephone
            <?= $form->field($model,'telephone')->textInput(['type' => 'integer', 'placeholder' => ' '])->label(false);?>
        </label>
    </div>
    <div class="columns medium-6">
        <label>
            Mobile telephone
            <?= $form->field($model,'mobile_phone')->textInput(['type' => 'integer', 'placeholder' => ' '])->label(false);?>
        </label>
    </div>
    <div class="columns medium-6">
        <label>
            Fax
            <?= $form->field($model,'fax')->textInput(['type' => 'integer', 'placeholder' => ' '])->label(false);?>
        </label>
    </div>

    <div class="clearfix"></div>
    <h6><b>- EDUCATION</b></h6>
    <div class="columns medium-6">
        <label>
            Degree(s) held (e.g. Medicine)
            <?= $form->field($model,'degree')->textInput(['type' => 'string', 'placeholder' => 'Use latin characters'])->label(false);?>
        </label>
    </div>
    <div class="columns medium-6">
        <label>
            Speciality
            <?= $form->field($model,'speciality')->textInput(['type' => 'string', 'placeholder' => 'Use latin characters'])->label(false);?>
        </label>
    </div>
    <div class="columns medium-6">
        <label>
            Name of institution
            <?= $form->field($model,'institution')->textInput(['type' => 'string', 'placeholder' => 'Use latin characters'])->label(false);?>
        </label>
    </div>
    <div class="columns medium-6">
        <label>Country institution is located
            <?= $form->field($model, 'institution_country')->dropDownList([
                'Afghanistan' => 'Afghanistan',
                'Albania' => 'Albania',
                'Algeria' => 'Algeria',
                'American Samoa' => 'American Samoa',
                'Andorra' => 'Andorra',
                'Angola' => 'Angola',
                'Antigua and Barbuda' => 'Antigua and Barbuda',
                'Argentina' => 'Argentina',
                'Armenia' => 'Armenia',
                'Aruba' => 'Aruba',
                'Australia' => 'Australia',
                'Austria' => 'Austria',
                'Azerbaijan' => 'Azerbaijan',
                'Bahamas' => 'Bahamas',
                'Bahrain' => 'Bahrain',
                'Bangladesh' => 'Bangladesh',
                'Barbados' => 'Barbados',
                'Belarus' => 'Belarus',
                'Belgium' => 'Belgium',
                'Belize' => 'Belize',
                'Benin' => 'Benin',
                'Bermuda' => 'Bermuda',
                'Bhutan' => 'Bhutan',
                'Bolivia' => 'Bolivia',
                'Bosnia and Herzegovina' => 'Bosnia and Herzegovina',
                'Botswana' => 'Botswana',
                'Brazil' => 'Brazil',
                'British Virgin Islands' => 'British Virgin Islands',
                'Brunei Darussalam' => 'Brunei Darussalam',
                'Bulgaria' => 'Bulgaria',
                'Burkina Faso' => 'Burkina Faso',
                'Burundi' => 'Burundi',
                'Cambodia' => 'Cambodia',
                'Cameroon' => 'Cameroon',
                'Canada' => 'Canada',
                'Cape Verde' => 'Cape Verde',
                'Cayman Islands' => 'Cayman Islands',
                'Central African Republic' => 'Central African Republic',
                'Chad' => 'Chad',
                'Channel Islands' => 'Channel Islands',
                'Chile' => 'Chile',
                'China' => 'China',
                'Colombia' => 'Colombia',
                'Comoros' => 'Comoros',
                'Congo' => 'Congo',
                'Cook Islands' => 'Cook Islands',
                'Costa Rica' => 'Costa Rica',
                'Cote d�Ivoire' => 'Cote d�Ivoire',
                'Croatia' => 'Croatia',
                'Cuba' => 'Cuba',
                'Cyprus' => 'Cyprus',
                'Czech Republic' => 'Czech Republic',
                'Dem. People�s Rep. of Korea' => 'Dem. People�s Rep. of Korea',
                'Dem. Republic of the Congo' => 'Dem. Republic of the Congo',
                'Denmark' => 'Denmark',
                'Djibouti' => 'Djibouti',
                'Dominica' => 'Dominica',
                'Dominican Republic' => 'Dominican Republic',
                'Ecuador' => 'Ecuador',
                'Egypt' => 'Egypt',
                'El Salvador' => 'El Salvador',
                'Equatorial Guinea' => 'Equatorial Guinea',
                'Eritrea' => 'Eritrea',
                'Estonia' => 'Estonia',
                'Ethiopia' => 'Ethiopia',
                'Faeroe Islands' => 'Faeroe Islands',
                'Falkland Islands (Malvinas)' => 'Falkland Islands (Malvinas)',
                'Fed. States of Micronesia' => 'Fed. States of Micronesia',
                'Fiji' => 'Fiji',
                'Finland' => 'Finland',
                'France' => 'France',
                'French Guiana' => 'French Guiana',
                'French Polynesia' => 'French Polynesia',
                'Gabon' => 'Gabon',
                'Gambia' => 'Gambia',
                'Georgia' => 'Georgia',
                'Germany' => 'Germany',
                'Ghana' => 'Ghana',
                'Gibraltar' => 'Gibraltar',
                'Greece' => 'Greece',
                'Greenland' => 'Greenland',
                'Grenada' => 'Grenada',
                'Guadeloupe' => 'Guadeloupe',
                'Guam' => 'Guam',
                'Guatemala' => 'Guatemala',
                'Guinea' => 'Guinea',
                'Guinea-Bissau' => 'Guinea-Bissau',
                'Guyana' => 'Guyana',
                'Haiti' => 'Haiti',
                'Holy See' => 'Holy See',
                'Honduras' => 'Honduras',
                'Hong Kong' => 'Hong Kong',
                'Hungary' => 'Hungary',
                'Iceland' => 'Iceland',
                'India' => 'India',
                'Indonesia' => 'Indonesia',
                'Iran' => 'Iran',
                'Iraq' => 'Iraq',
                'Ireland' => 'Ireland',
                'Isle of Man' => 'Isle of Man',
                'Israel' => 'Israel',
                'Italy' => 'Italy',
                'Jamaica' => 'Jamaica',
                'Japan' => 'Japan',
                'Johnston Island' => 'Johnston Island',
                'Jordan' => 'Jordan',
                'Kazakhstan' => 'Kazakhstan',
                'Kenya' => 'Kenya',
                'Kiribati' => 'Kiribati',
                'Kuwait' => 'Kuwait',
                'Kyrgyzstan' => 'Kyrgyzstan',
                'Lao People�s Dem. Republic' => 'Lao People�s Dem. Republic',
                'Latvia' => 'Latvia',
                'Lebanon' => 'Lebanon',
                'Lesotho' => 'Lesotho',
                'Liberia' => 'Liberia',
                'Libyan Arab Jamahiriya' => 'Libyan Arab Jamahiriya',
                'Liechtenstein' => 'Liechtenstein',
                'Lithuania' => 'Lithuania',
                'Luxembourg' => 'Luxembourg',
                'Macao' => 'Macao',
                'China' => 'China',
                'Madagascar' => 'Madagascar',
                'Malawi' => 'Malawi',
                'Malaysia' => 'Malaysia',
                'Maldives' => 'Maldives',
                'Mali' => 'Mali',
                'Malta' => 'Malta',
                'Marshall Islands' => 'Marshall Islands',
                'Martinique' => 'Martinique',
                'Mauritania' => 'Mauritania',
                'Mauritius' => 'Mauritius',
                'Mexico' => 'Mexico',
                'Monaco' => 'Monaco',
                'Mongolia' => 'Mongolia',
                'Montserrat' => 'Montserrat',
                'Morocco' => 'Morocco',
                'Mozambique' => 'Mozambique',
                'Myanmar' => 'Myanmar',
                'Namibia' => 'Namibia',
                'Nauru' => 'Nauru',
                'Nepal' => 'Nepal',
                'Netherlands' => 'Netherlands',
                'Netherlands Antilles' => 'Netherlands Antilles',
                'New Caledonia' => 'New Caledonia',
                'New Zealand' => 'New Zealand',
                'Nicaragua' => 'Nicaragua',
                'Niger' => 'Niger',
                'Nigeria' => 'Nigeria',
                'Niue' => 'Niue',
                'Norfolk Island' => 'Norfolk Island',
                'Northern Mariana Islands' => 'Northern Mariana Islands',
                'Norway' => 'Norway',
                'Occupied Palestinian Territory' => 'Occupied Palestinian Territory',
                'Oman' => 'Oman',
                'Pakistan' => 'Pakistan',
                'Palau' => 'Palau',
                'Panama' => 'Panama',
                'Papua New Guinea' => 'Papua New Guinea',
                'Paraguay' => 'Paraguay',
                'Peru' => 'Peru',
                'Philippines' => 'Philippines',
                'Pitcairn' => 'Pitcairn',
                'Poland' => 'Poland',
                'Portugal' => 'Portugal',
                'Puerto Rico' => 'Puerto Rico',
                'Qatar' => 'Qatar',
                'Republic of Korea' => 'Republic of Korea',
                'Republic of Moldova' => 'Republic of Moldova',
                'Reunion' => 'Reunion',
                'Romania' => 'Romania',
                'Russian Federation' => 'Russian Federation',
                'Rwanda' => 'Rwanda',
                'Saint Helena' => 'Saint Helena',
                'Saint Kitts and Nevis' => 'Saint Kitts and Nevis',
                'Saint Lucia' => 'Saint Lucia',
                'Saint Pierre and Miquelon' => 'Saint Pierre and Miquelon',
                'Saint Vincent and Grenadines' => 'Saint Vincent and Grenadines',
                'Samoa' => 'Samoa',
                'San Marino' => 'San Marino',
                'Sao Tome and Principe' => 'Sao Tome and Principe',
                'Saudi Arabia' => 'Saudi Arabia',
                'Senegal' => 'Senegal',
                'Seychelles' => 'Seychelles',
                'Sierra Leone' => 'Sierra Leone',
                'Singapore' => 'Singapore',
                'Slovakia' => 'Slovakia',
                'Slovenia' => 'Slovenia',
                'Solomon Islands' => 'Solomon Islands',
                'Somalia' => 'Somalia',
                'South Africa' => 'South Africa',
                'Spain' => 'Spain',
                'Sri Lanka' => 'Sri Lanka',
                'Sudan' => 'Sudan',
                'Suriname' => 'Suriname',
                'Swaziland' => 'Swaziland',
                'Sweden' => 'Sweden',
                'Switzerland' => 'Switzerland',
                'Syrian Arab Republic' => 'Syrian Arab Republic',
                'Tajikistan' => 'Tajikistan',
                'Thailand' => 'Thailand',
                'The Former Yugoslav Republic of Macedonia' => 'The Former Yugoslav Republic of Macedonia',
                'Timor-Leste' => 'Timor-Leste',
                'Togo' => 'Togo',
                'Tokelau' => 'Tokelau',
                'Tonga' => 'Tonga',
                'Trinidad and Tobago' => 'Trinidad and Tobago',
                'Tunisia' => 'Tunisia',
                'Turkey' => 'Turkey',
                'Turkmenistan' => 'Turkmenistan',
                'Turks and Caicos Islands' => 'Turks and Caicos Islands',
                'Tuvalu' => 'Tuvalu',
                'Uganda' => 'Uganda',
                'Ukraine' => 'Ukraine',
                'United Arab Emirate' => 'United Arab Emirate',
                'United Kingdom' => 'United Kingdom',
                'United Rep. of Tanzania' => 'United Rep. of Tanzania',
                'United States of America' => 'United States of America',
                'United States Virgin Islands' => 'United States Virgin Islands',
                'Uruguay' => 'Uruguay',
                'Uzbekistan' => 'Uzbekistan',
                'Vanuatu' => 'Vanuatu',
                'Venezuela' => 'Venezuela',
                'Viet Nam' => 'Viet Nam',
                'Wallis and Futuna Islands' => 'Wallis and Futuna Islands',
                'Western Sahara' => 'Western Sahara',
                'Yemen' => 'Yemen',
                'Yugoslavia' => 'Yugoslavia',
                'Zambia' => 'Zambia',
                'Zimbabwe' => 'Zimbabwe',
            ],
            ['prompt' => 'Select Country']
            )->label(false);?>
        </label>
    </div>
    <div class="columns medium-6">
        <label>
            Year Degree was obtained
            <?= $form->field($model,'degree_year')->textInput(['type' => 'integer', 'placeholder' => ' '])->label(false);?>
        </label>
    </div>

    <div class="clearfix"></div>
    <h6><b>- POSITION APPLYING FOR</b></h6>
    <div class="columns medium-12">
        <?=$form->field($model, 'position')->checkboxList([
            'translator' => 'translator',
            'researcher' => 'researcher',
            'publisher' => 'publisher',
            'typist' => 'typist',
            'reviewer' => 'reviewer',
            'graphic' => 'graphic',
            'web designer' => 'web designer',
            'data entry' => 'data entry',
        ])->label(false);?>
    </div>
    <div class="clearfix"></div>
    <h6><b>- EXPERIENCE</b></h6>
    <div class="columns medium-12">
        <label>Working languages
            <?= $form->field($model,'working_languages')->textInput(['type' => 'string', 'placeholder' => ' '])->label(false);?>
        </label>
    </div>
    <div class="columns medium-12">
        <label>Years of experience or list of projects
            <?= $form->field($model,'experience')->textInput(['type' => 'string', 'placeholder' => ' '])->label(false);?>
        </label>
    </div>
    <div class="columns medium-12">
        <label>Field of expertise
            <?= $form->field($model, 'field_of_experience')->dropDownList([
                'Medical/Pharmaceutical/Medical devices/Instruments/Medical tests' => 'Medical/Pharmaceutical/Medical devices/Instruments/Medical tests',
                'Legal/Contracts' => 'Legal/Contracts',
                'Engineering' => 'Engineering',
                'Economics/Marketing/Finance/Human Resource' => 'Economics/Marketing/Finance/Human Resource',
                'Management/Business Administration' => 'Management/Business Administration',
            ],
            ['prompt' => 'Select Field']
            )->label(false);?>
    </div>
    <div class="columns medium-6">
        <label>Do you have TRADOS/SDL?
            <?= $form->field($model, 'trados')->dropDownList([
                'Yes' => 'Yes',
                'No' => 'No'
            ])->label(false);?>
        </label>
    </div>
    <div class="columns medium-6">
        <label>Do you know how to use TRADOS/SDL?
            <?= $form->field($model, 'trados_knowledge')->dropDownList([
                'Yes' => 'Yes',
                'No' => 'No'
            ])->label(false);?>
        </label>
    </div>
    <div class="columns medium-12">
        <label>Upload <b>PDF</b> File
        <?=$form->field($model ,'uploadFile')->fileInput(['multiple' => false])->label(false);?>
        </label>
    </div>
    <div class="columns medium-12">
        <?= Html::submitButton('Apply', ['class' => 'button success f_c_white'])?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>


<div class="spacer"></div>

<?php $this->beginContent('@app/views/layouts/footer.php', [
  'lang' => $lang,
  'texts' => $texts
]); ?>
<?php $this->endContent(); ?>