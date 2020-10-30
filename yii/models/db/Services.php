<?php 

namespace app\models\db;

use Yii;
use yii\helpers\BaseHtml;

/**
 * This is the model class for table "{{%services}}"
 * 
 * @property $id
 * @property $title_en
 * @property $title_rus
 * @property $text_en
 * @property $text_rus
 * 
 */

 class Services extends \yii\db\ActiveRecord
 {
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%services}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_en', 'title_rus','text_en', 'text_rus',], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'text_en' => Yii::t('app', 'Text En'),
            'title_en' => Yii::t('app', 'Title En'),
            'text_rus' => Yii::t('app', 'Text Rus'),
            'title_rus' => Yii::t('app', 'Title Rus'),
        ];
    }
 }