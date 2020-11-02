<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

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
    public $body;
    public $subject;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name',  'country', 'prefecture', 'city', 'postal_address', 'postal_code', 'email', 'telephone', 'mobile_phone', 'degree', 'speciality', 'institution', 'institution_country', 'degree_year', 'position', 'working_languages', 'field_of_experience', 'experience', 'trados_knowledge', 'trados', 'uploadFile'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],

            [['uploadFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'pdf'],

            [['surname', 'name', 'country', 'prefecture', 'degree', 'speciality', 'institution', 'working_languages', 'experience','institution_country'], 'string'],

            [['postal_address', 'postal_code', 'mobile_phone', 'fax', 'telephone', 'degree_year'], 'integer'],
            // verifyCode needs to be entered correctly
        ];
    }

    public function submit()
    {
        $this->uploadFile = UploadedFile::getInstanceByName('CvForm[uploadFile]');

        $applying_for = '';
        if ($this->position) {
            foreach($this->position as $position) {
                $applying_for = $applying_for.$position.'<br>';
            }
        }
        $this->body = '<b>---Personal Data---</b><br>Name: '.$this->name.'<br>Surnmae: '.$this->surname.'<br><br><b>---Contact Information---</b><br>Country: '.$this->country.'<br>Prefecture: '.$this->prefecture.'<br>City/Town: '.$this->city.'<br>Postal Address: '.$this->postal_address.'<br>Post Code: '.$this->postal_code.'<br>Email: '.$this->email.'<br>Fixed Telephone: '.$this->telephone.'<br>Mobile Phone: '.$this->mobile_phone.'<br>Fax: '.$this->fax.'<br><br><b>---Education---</b><br>Degrees: '.$this->degree.'<br>Speciality: '.$this->speciality.'<br>Institution: '.$this->institution.'<br>Institution Country: '.$this->institution_country.'<br>Degree Year: '.$this->degree_year.'<br><br><b>---Position Applying for---</b><br>Position: '.$applying_for.'<br><b>---Experience---</b><br>Working Languages: '.$this->working_languages.'<br>Years of experience or list of projects: '.$this->experience.'<br>Field of experience: '.$this->field_of_experience.'<br>Got Trados/SDL: '.$this->trados.'<br>Knowledge of Trados/SDL: '.$this->trados_knowledge;
        $this->subject = 'Mail from website CV form';
        
        if ($this->validate()) {
            $cv = \Yii::$app->security->generateRandomString();
            $this->uploadFile->saveAs('cv/'.$cv.'.pdf');
            
            Yii::$app->mailer->compose()
                ->setFrom([Yii::$app->params['fromEmail']])
                ->setTo(Yii::$app->params['adminEmail'])
                ->setSubject($this->subject)
                ->setHtmlBody($this->body)
                ->attach('cv/'.$cv.'.pdf')
                ->send();

            return true;
        }
        return false;
    }
}