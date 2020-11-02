<?php 

namespace app\models\db;

use Yii;
use yii\helpers\BaseHtml;

/**
 * This is the model class for table "{{%slider}}"
 * 
 * @property $id
 * @property $photo
 * @property $position
 * 
 */

 class Slider extends \yii\db\ActiveRecord
 {
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%slider}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photo',], 'string'],
            [['id', 'position'], 'integer'],
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
            'position' => Yii::t('app', 'Position'),
        ];
    }
 }