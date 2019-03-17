<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%usersoclogin}}".
 *
 * @property int $idusersoclogin
 * @property int $user_iduser
 * @property string $socialnet
 * @property string $socident
 * @property string $firstname
 * @property string $secondname
 * @property string $datereg
 *
 * @property User $userIduser
 */
class Usersoclogin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%usersoclogin}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_iduser'], 'integer'],
            [['datereg'], 'safe'],
            [['socialnet', 'socident'], 'string', 'max' => 255],
            [['firstname', 'secondname'], 'string', 'max' => 45],
            [['user_iduser'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_iduser' => 'iduser']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idusersoclogin' => Yii::t('db-label', 'Idusersoclogin'),
            'user_iduser' => Yii::t('db-label', 'User Iduser'),
            'socialnet' => Yii::t('db-label', 'Socialnet'),
            'socident' => Yii::t('db-label', 'Socident'),
            'firstname' => Yii::t('db-label', 'Firstname'),
            'secondname' => Yii::t('db-label', 'Secondname'),
            'datereg' => Yii::t('db-label', 'Datereg'),
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
