<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property int $iduser
 * @property string $userlogin
 * @property string $username
 * @property string $usersecondname
 * @property string $hpassword
 * @property string $datereg
 *
 * @property Entrhistory[] $entrhistories
 * @property PhotoDoc[] $photoDocs
 * @property Userdetail[] $userdetails
 * @property Usersoclogin[] $usersoclogins
 */
class UserCustomer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userlogin', 'hpassword', 'datereg'], 'required'],
            [['datereg'], 'safe'],
            [['userlogin', 'username', 'hpassword'], 'string', 'max' => 100],
            [['usersecondname'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iduser' => Yii::t('db-label', 'Iduser'),
            'userlogin' => Yii::t('db-label', 'Userlogin'),
            'username' => Yii::t('db-label', 'Username'),
            'usersecondname' => Yii::t('db-label', 'Usersecondname'),
            'hpassword' => Yii::t('db-label', 'Hpassword'),
            'datereg' => Yii::t('db-label', 'Datereg'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntrhistories()
    {
        return $this->hasMany(Entrhistory::className(), ['user_iduser' => 'iduser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotoDocs()
    {
        return $this->hasMany(PhotoDoc::className(), ['user_iduser' => 'iduser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserdetails()
    {
        return $this->hasMany(Userdetail::className(), ['user_iduser' => 'iduser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsersoclogins()
    {
        return $this->hasMany(Usersoclogin::className(), ['user_iduser' => 'iduser']);
    }
}
