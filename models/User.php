<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property int $id
 * @property int $created_at
 * @property int $updated_at
 * @property string $username
 * @property string $auth_key
 * @property string $email_confirm_token
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $status
 */
class User extends \yii\db\ActiveRecord
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
            [['created_at', 'updated_at', 'username', 'password_hash', 'email'], 'required'],
            [['created_at', 'updated_at', 'status'], 'integer'],
            [['username', 'email_confirm_token', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('db-label', 'ID'),
            'created_at' => Yii::t('db-label', 'Created At'),
            'updated_at' => Yii::t('db-label', 'Updated At'),
            'username' => Yii::t('db-label', 'Username'),
            'auth_key' => Yii::t('db-label', 'Auth Key'),
            'email_confirm_token' => Yii::t('db-label', 'Email Confirm Token'),
            'password_hash' => Yii::t('db-label', 'Password Hash'),
            'password_reset_token' => Yii::t('db-label', 'Password Reset Token'),
            'email' => Yii::t('db-label', 'Email'),
            'status' => Yii::t('db-label', 'Status'),
        ];
    }
}
