<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "{{%languages}}".
 *
 * @property integer $id
 * @property integer $enable
 * @property integer $primary
 * @property integer $set
 * @property string $code
 * @property string $name_en
 * @property string $name_gr
 * @property string $iso_code
 */
class Languages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%languages}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enable', 'primary', 'set'], 'integer'],
            [['code'], 'required'],
            [['code'], 'string', 'max' => 10],
            [['name_en', 'name_rus'], 'string', 'max' => 50],
            [['iso_code'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'enable' => Yii::t('app', 'Enable'),
            'primary' => Yii::t('app', 'Primary'),
            'set' => Yii::t('app', 'Set'),
            'code' => Yii::t('app', 'Code'),
            'name_en' => Yii::t('app', 'Name En'),
            'name_gr' => Yii::t('app', 'Name Gr'),
            'iso_code' => Yii::t('app', 'Iso Code'),
        ];
    }

    /**
     * @inheritdoc
     * @return LanguagesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LanguagesQuery(get_called_class());
    }
}
