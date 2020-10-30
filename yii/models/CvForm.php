<?php

namespace app\models;

use Yii;
use yii\base\Model;

class CvForm extends Model
{
    public $name;
    public $surname;
    public $country;
    public $prefecture;
    public $city;
    public $postal_address;
    public $postal_code;
    public $email;
    public $telephone;
    public $mobile_phone;
    public $fax;
    public $degree;
    public $speciality;
    public $institution;
    public $institution_country;
    public $degree_year;
    public $position;
    public $working_languages;
    public $experience;
    public $field_of_experience;
    public $trados;
    public $trados_knowledge;
    public $uploadFile;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'surname', 'country', 'prefecture', 'city', 'postal_address', 'postal_code', 'email', 'mobile_phone', 'degree', 'speciality', 'institution', 'institution_country', 'degree_year', 'position', 'working_languages', 'field_of_experience', 'experience', 'trados_knowledge', 'trados', 'uploadFile'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],

            [['surname', 'name', 'country', 'prefecture', 'degree', 'speciality', 'institution', 'working_languages', 'experience',], 'string'],

            [['postal_address', 'postal_code', 'mobile_phone', 'fax', 'telephone', 'degree_year'], 'integer'],
            // verifyCode needs to be entered correctly
        ];
    }

    public function submit()
    {
        if ($this->validate()) {
            return true;
        }

        return false;
    }
}