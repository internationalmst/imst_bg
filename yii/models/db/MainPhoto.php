<?php 

namespace app\models\db;

use Yii;
use yii\helpers\BaseHtml;

/**
 * This is the model class for table "{{%main_photo}}"
 * 
 * @property $id
 * @property $photo
 * @property $title_en
 * @property $title_rus
 * @property $subtitle_en
 * @property $subtitle_rus
 * 
 */

 class MainPhoto extends \yii\db\ActiveRecord
 {
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%main_photo}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photo', 'title_en', 'subtitle_en', 'title_rus', 'subtitle_rus'], 'string'],
            [['id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'photo' => Yii::t('app', 'Photo'),
            'title_en' => Yii::t('app', 'Title En'),
            'subtitle_en' => Yii::t('app', 'Subtitle En'),
            'title_rus' => Yii::t('app', 'Title Rus'),
            'subtitle_rus' => Yii::t('app', 'Subtitle Rus'),
        ];
    }
 }