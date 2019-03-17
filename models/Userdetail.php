<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%userdetail}}".
 *
 * @property int $iduserdetail
 * @property string $adress
 * @property string $phone
 * @property string $about
 * @property string $info
 * @property int $user_iduser
 *
 * @property User $userIduser
 */
class Userdetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%userdetail}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_iduser'], 'required'],
            [['user_iduser'], 'integer'],
            [['adress'], 'string', 'max' => 150],
            [['phone'], 'string', 'max' => 20],
            [['about', 'info'], 'string', 'max' => 255],
            [['user_iduser'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_iduser' => 'iduser']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iduserdetail' => Yii::t('db-label', 'Iduserdetail'),
            'adress' => Yii::t('db-label', 'Adress'),
            'phone' => Yii::t('db-label', 'Phone'),
            'about' => Yii::t('db-label', 'About'),
            'info' => Yii::t('db-label', 'Info'),
            'user_iduser' => Yii::t('db-label', 'User Iduser'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserIduser()
    {
        return $this->hasOne(User::className(), ['iduser' => 'user_iduser']);
    }
}
