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

<!-- ======= Hero Section ======= -->
<section id="hero">

  <div class="carousel-inner" role="listbox">

    <!-- Slide 1 -->
    <div class="carousel-item" style="background-image: url(/images/mainphoto/<?=$main_photo->photo?>.jpg);margin-top:100px;">
      <div class="container">
        <h1><?=$main_photo->title_en?></h1>
        <p class="subheader"><?=$main_photo->subtitle_en?></p>
      </div>
    </div>

  </div>
</section><!-- End Hero -->

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
                1 => 'Afghanistan',
                2 => 'Albania',
                3 => 'Algeria',
                4 => 'American Samoa',
                5 => 'Andorra',
                6 => 'Angola',
                7 => 'Antigua and Barbuda',
                8 => 'Argentina',
                9 => 'Armenia',
                10 => 'Aruba',
                11 => 'Australia',
                12 => 'Austria',
                13 => 'Azerbaijan',
                14 => 'Bahamas',
                15 => 'Bahrain',
                16 => 'Bangladesh',
                17 => 'Barbados',
                18 => 'Belarus',
                19 => 'Belgium',
                20 => 'Belize',
                21 => 'Benin',
                22 => 'Bermuda',
                23 => 'Bhutan',
                24 => 'Bolivia',
                25 => 'Bosnia and Herzegovina',
                26 => 'Botswana',
                27 => 'Brazil',
                28 => 'British Virgin Islands',
                29 => 'Brunei Darussalam',
                30 => 'Bulgaria',
                31 => 'Burkina Faso',
                32 => 'Burundi',
                33 => 'Cambodia',
                34 => 'Cameroon',
                35 => 'Canada',
                36 => 'Cape Verde',
                37 => 'Cayman Islands',
                38 => 'Central African Republic',
                39 => 'Chad',
                40 => 'Channel Islands',
                41 => 'Chile',
                42 => 'China',
                43 => 'Colombia',
                44 => 'Comoros',
                45 => 'Congo',
                46 => 'Cook Islands',
                47 => 'Costa Rica',
                48 => 'Cote d�Ivoire',
                49 => 'Croatia',
                50 => 'Cuba',
                51 => 'Cyprus',
                52 => 'Czech Republic',
                53 => 'Dem. People�s Rep. of Korea',
                54 => 'Dem. Republic of the Congo',
                55 => 'Denmark',
                56 => 'Djibouti',
                57 => 'Dominica',
                58 => 'Dominican Republic',
                59 => 'Ecuador',
                60 => 'Egypt',
                71 => 'El Salvador',
                72 => 'Equatorial Guinea',
                73 => 'Eritrea',
                74 => 'Estonia',
                75 => 'Ethiopia',
                76 => 'Faeroe Islands',
                77 => 'Falkland Islands (Malvinas)',
                78 => 'Fed. States of Micronesia',
                79 => 'Fiji',
                80 => 'Finland',
                81 => 'France',
                82 => 'French Guiana',
                83 => 'French Polynesia',
                84 => 'Gabon',
                85 => 'Gambia',
                86 => 'Georgia',
                87 => 'Germany',
                88 => 'Ghana',
                89 => 'Gibraltar',
                90 => 'Greece',
                91 => 'Greenland',
                92 => 'Grenada',
                93 => 'Guadeloupe',
                94 => 'Guam',
                95 => 'Guatemala',
                96 => 'Guinea',
                97 => 'Guinea-Bissau',
                98 => 'Guyana',
                99 => 'Haiti',
                100 => 'Holy See',
                101 => 'Honduras',
                102 => 'Hong Kong',
                103 => 'Hungary',
                104 => 'Iceland',
                105 => 'India',
                106 => 'Indonesia',
                107 => 'Iran',
                108 => 'Iraq',
                109 => 'Ireland',
                110 => 'Isle of Man',
                111 => 'Israel',
                112 => 'Italy',
                113 => 'Jamaica',
                114 => 'Japan',
                115 => 'Johnston Island',
                116 => 'Jordan',
                117 => 'Kazakhstan',
                118 => 'Kenya',
                119 => 'Kiribati',
                120 => 'Kuwait',
                121 => 'Kyrgyzstan',
                122 => 'Lao People�s Dem. Republic',
                123 => 'Latvia',
                124 => 'Lebanon',
                125 => 'Lesotho',
                126 => 'Liberia',
                127 => 'Libyan Arab Jamahiriya',
                128 => 'Liechtenstein',
                129 => 'Lithuania',
                130 => 'Luxembourg',
                131 => 'Macao',
                132 => 'China',
                133 => 'Madagascar',
                134 => 'Malawi',
                135 => 'Malaysia',
                136 => 'Maldives',
                137 => 'Mali',
                138 => 'Malta',
                139 => 'Marshall Islands',
                140 => 'Martinique',
                141 => 'Mauritania',
                142 => 'Mauritius',
                143 => 'Mexico',
                144 => 'Monaco',
                145 => 'Mongolia',
                146 => 'Montserrat',
                147 => 'Morocco',
                148 => 'Mozambique',
                149 => 'Myanmar',
                150 => 'Namibia',
                151 => 'Nauru',
                152 => 'Nepal',
                153 => 'Netherlands',
                154 => 'Netherlands Antilles',
                155 => 'New Caledonia',
                156 => 'New Zealand',
                157 => 'Nicaragua',
                158 => 'Niger',
                159 => 'Nigeria',
                160 => 'Niue',
                161 => 'Norfolk Island',
                162 => 'Northern Mariana Islands',
                163 => 'Norway',
                164 => 'Occupied Palestinian Territory',
                165 => 'Oman',
                166 => 'Pakistan',
                167 => 'Palau',
                168 => 'Panama',
                169 => 'Papua New Guinea',
                170 => 'Paraguay',
                171 => 'Peru',
                172 => 'Philippines',
                173 => 'Pitcairn',
                174 => 'Poland',
                175 => 'Portugal',
                176 => 'Puerto Rico',
                177 => 'Qatar',
                178 => 'Republic of Korea',
                179 => 'Republic of Moldova',
                180 => 'Reunion',
                181 => 'Romania',
                182 => 'Russian Federation',
                183 => 'Rwanda',
                184 => 'Saint Helena',
                185 => 'Saint Kitts and Nevis',
                186 => 'Saint Lucia',
                187 => 'Saint Pierre and Miquelon',
                188 => 'Saint Vincent and Grenadines',
                189 => 'Samoa',
                190 => 'San Marino',
                191 => 'Sao Tome and Principe',
                192 => 'Saudi Arabia',
                193 => 'Senegal',
                194 => 'Seychelles',
                195 => 'Sierra Leone',
                196 => 'Singapore',
                197 => 'Slovakia',
                198 => 'Slovenia',
                199 => 'Solomon Islands',
                200 => 'Somalia',
                201 => 'South Africa',
                202 => 'Spain',
                203 => 'Sri Lanka',
                204 => 'Sudan',
                205 => 'Suriname',
                206 => 'Swaziland',
                207 => 'Sweden',
                208 => 'Switzerland',
                209 => 'Syrian Arab Republic',
                210 => 'Tajikistan',
                211 => 'Thailand',
                212 => 'The Former Yugoslav Republic of Macedonia',
                213 => 'Timor-Leste',
                214 => 'Togo',
                215 => 'Tokelau',
                216 => 'Tonga',
                217 => 'Trinidad and Tobago',
                218 => 'Tunisia',
                219 => 'Turkey',
                220 => 'Turkmenistan',
                221 => 'Turks and Caicos Islands',
                222 => 'Tuvalu',
                223 => 'Uganda',
                224 => 'Ukraine',
                225 => 'United Arab Emirate',
                226 => 'United Kingdom',
                227 => 'United Rep. of Tanzania',
                228 => 'United States of America',
                229 => 'United States Virgin Islands',
                230 => 'Uruguay',
                231 => 'Uzbekistan',
                232 => 'Vanuatu',
                233 => 'Venezuela',
                234 => 'Viet Nam',
                235 => 'Wallis and Futuna Islands',
                236 => 'Western Sahara',
                237 => 'Yemen',
                238 => 'Yugoslavia',
                239 => 'Zambia',
                240 => 'Zimbabwe',
            ],
            ['prompt' => 'Select Country']
            );?>
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
            <?= $form->field($model,'postal_code')->textInput(['type' => 'integer', 'placeholder' => 'Use latin characters'])->label(false);?>
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
            <?= $form->field($model, 'country')->dropDownList([
                1 => 'Afghanistan',
                2 => 'Albania',
                3 => 'Algeria',
                4 => 'American Samoa',
                5 => 'Andorra',
                6 => 'Angola',
                7 => 'Antigua and Barbuda',
                8 => 'Argentina',
                9 => 'Armenia',
                10 => 'Aruba',
                11 => 'Australia',
                12 => 'Austria',
                13 => 'Azerbaijan',
                14 => 'Bahamas',
                15 => 'Bahrain',
                16 => 'Bangladesh',
                17 => 'Barbados',
                18 => 'Belarus',
                19 => 'Belgium',
                20 => 'Belize',
                21 => 'Benin',
                22 => 'Bermuda',
                23 => 'Bhutan',
                24 => 'Bolivia',
                25 => 'Bosnia and Herzegovina',
                26 => 'Botswana',
                27 => 'Brazil',
                28 => 'British Virgin Islands',
                29 => 'Brunei Darussalam',
                30 => 'Bulgaria',
                31 => 'Burkina Faso',
                32 => 'Burundi',
                33 => 'Cambodia',
                34 => 'Cameroon',
                35 => 'Canada',
                36 => 'Cape Verde',
                37 => 'Cayman Islands',
                38 => 'Central African Republic',
                39 => 'Chad',
                40 => 'Channel Islands',
                41 => 'Chile',
                42 => 'China',
                43 => 'Colombia',
                44 => 'Comoros',
                45 => 'Congo',
                46 => 'Cook Islands',
                47 => 'Costa Rica',
                48 => 'Cote d�Ivoire',
                49 => 'Croatia',
                50 => 'Cuba',
                51 => 'Cyprus',
                52 => 'Czech Republic',
                53 => 'Dem. People�s Rep. of Korea',
                54 => 'Dem. Republic of the Congo',
                55 => 'Denmark',
                56 => 'Djibouti',
                57 => 'Dominica',
                58 => 'Dominican Republic',
                59 => 'Ecuador',
                60 => 'Egypt',
                71 => 'El Salvador',
                72 => 'Equatorial Guinea',
                73 => 'Eritrea',
                74 => 'Estonia',
                75 => 'Ethiopia',
                76 => 'Faeroe Islands',
                77 => 'Falkland Islands (Malvinas)',
                78 => 'Fed. States of Micronesia',
                79 => 'Fiji',
                80 => 'Finland',
                81 => 'France',
                82 => 'French Guiana',
                83 => 'French Polynesia',
                84 => 'Gabon',
                85 => 'Gambia',
                86 => 'Georgia',
                87 => 'Germany',
                88 => 'Ghana',
                89 => 'Gibraltar',
                90 => 'Greece',
                91 => 'Greenland',
                92 => 'Grenada',
                93 => 'Guadeloupe',
                94 => 'Guam',
                95 => 'Guatemala',
                96 => 'Guinea',
                97 => 'Guinea-Bissau',
                98 => 'Guyana',
                99 => 'Haiti',
                100 => 'Holy See',
                101 => 'Honduras',
                102 => 'Hong Kong',
                103 => 'Hungary',
                104 => 'Iceland',
                105 => 'India',
                106 => 'Indonesia',
                107 => 'Iran',
                108 => 'Iraq',
                109 => 'Ireland',
                110 => 'Isle of Man',
                111 => 'Israel',
                112 => 'Italy',
                113 => 'Jamaica',
                114 => 'Japan',
                115 => 'Johnston Island',
                116 => 'Jordan',
                117 => 'Kazakhstan',
                118 => 'Kenya',
                119 => 'Kiribati',
                120 => 'Kuwait',
                121 => 'Kyrgyzstan',
                122 => 'Lao People�s Dem. Republic',
                123 => 'Latvia',
                124 => 'Lebanon',
                125 => 'Lesotho',
                126 => 'Liberia',
                127 => 'Libyan Arab Jamahiriya',
                128 => 'Liechtenstein',
                129 => 'Lithuania',
                130 => 'Luxembourg',
                131 => 'Macao',
                132 => 'China',
                133 => 'Madagascar',
                134 => 'Malawi',
                135 => 'Malaysia',
                136 => 'Maldives',
                137 => 'Mali',
                138 => 'Malta',
                139 => 'Marshall Islands',
                140 => 'Martinique',
                141 => 'Mauritania',
                142 => 'Mauritius',
                143 => 'Mexico',
                144 => 'Monaco',
                145 => 'Mongolia',
                146 => 'Montserrat',
                147 => 'Morocco',
                148 => 'Mozambique',
                149 => 'Myanmar',
                150 => 'Namibia',
                151 => 'Nauru',
                152 => 'Nepal',
                153 => 'Netherlands',
                154 => 'Netherlands Antilles',
                155 => 'New Caledonia',
                156 => 'New Zealand',
                157 => 'Nicaragua',
                158 => 'Niger',
                159 => 'Nigeria',
                160 => 'Niue',
                161 => 'Norfolk Island',
                162 => 'Northern Mariana Islands',
                163 => 'Norway',
                164 => 'Occupied Palestinian Territory',
                165 => 'Oman',
                166 => 'Pakistan',
                167 => 'Palau',
                168 => 'Panama',
                169 => 'Papua New Guinea',
                170 => 'Paraguay',
                171 => 'Peru',
                172 => 'Philippines',
                173 => 'Pitcairn',
                174 => 'Poland',
                175 => 'Portugal',
                176 => 'Puerto Rico',
                177 => 'Qatar',
                178 => 'Republic of Korea',
                179 => 'Republic of Moldova',
                180 => 'Reunion',
                181 => 'Romania',
                182 => 'Russian Federation',
                183 => 'Rwanda',
                184 => 'Saint Helena',
                185 => 'Saint Kitts and Nevis',
                186 => 'Saint Lucia',
                187 => 'Saint Pierre and Miquelon',
                188 => 'Saint Vincent and Grenadines',
                189 => 'Samoa',
                190 => 'San Marino',
                191 => 'Sao Tome and Principe',
                192 => 'Saudi Arabia',
                193 => 'Senegal',
                194 => 'Seychelles',
                195 => 'Sierra Leone',
                196 => 'Singapore',
                197 => 'Slovakia',
                198 => 'Slovenia',
                199 => 'Solomon Islands',
                200 => 'Somalia',
                201 => 'South Africa',
                202 => 'Spain',
                203 => 'Sri Lanka',
                204 => 'Sudan',
                205 => 'Suriname',
                206 => 'Swaziland',
                207 => 'Sweden',
                208 => 'Switzerland',
                209 => 'Syrian Arab Republic',
                210 => 'Tajikistan',
                211 => 'Thailand',
                212 => 'The Former Yugoslav Republic of Macedonia',
                213 => 'Timor-Leste',
                214 => 'Togo',
                215 => 'Tokelau',
                216 => 'Tonga',
                217 => 'Trinidad and Tobago',
                218 => 'Tunisia',
                219 => 'Turkey',
                220 => 'Turkmenistan',
                221 => 'Turks and Caicos Islands',
                222 => 'Tuvalu',
                223 => 'Uganda',
                224 => 'Ukraine',
                225 => 'United Arab Emirate',
                226 => 'United Kingdom',
                227 => 'United Rep. of Tanzania',
                228 => 'United States of America',
                229 => 'United States Virgin Islands',
                230 => 'Uruguay',
                231 => 'Uzbekistan',
                232 => 'Vanuatu',
                233 => 'Venezuela',
                234 => 'Viet Nam',
                235 => 'Wallis and Futuna Islands',
                236 => 'Western Sahara',
                237 => 'Yemen',
                238 => 'Yugoslavia',
                239 => 'Zambia',
                240 => 'Zimbabwe',
            ],
            ['prompt' => 'Select Country']
            );?>
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
    <div class="columns medium-6">
        <?=$form->field($model, 'position')->checkboxList([
            1 => 'translator',
            2 => 'researcher',
            3 => 'publisher',
            4 => 'typist',
            5 => 'reviewer',
            6 => 'graphic',
            7 => 'webdesigner',
            8 => 'dataentry',
        ]);?>
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
                1 => 'Medical/Pharmaceutical/Medical devices/Instruments/Medical tests',
                2 => 'Legal/Contracts',
                3 => 'Engineering',
                4 => 'Economics/Marketing/Finance/Human Resource',
                5 => 'Management/Business Administration',
            ],
            ['prompt' => 'Select Field']
            );?>
    </div>
    <div class="columns medium-12">
        <label>Do you have TRADOS?
            <?= $form->field($model, 'trados')->dropDownList([
                1 => 'Yes',
                2 => 'No'
            ]);?>
        </label>
    </div>
    <div class="columns medium-12">
        <label>Do you know how to use TRADOS?
            <?= $form->field($model, 'trados_knowledge')->dropDownList([
                1 => 'Yes',
                2 => 'No'
            ]);?>
        </label>
    </div>
    <div class="columns medium-12">
        <?=$form->field($model ,'uploadFile[]')->fileInput(['multiple' => false]);?>
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
  'main_photo' => $main_photo
]); ?>
<?php $this->endContent(); ?>