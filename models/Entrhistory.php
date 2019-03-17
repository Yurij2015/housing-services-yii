<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%entrhistory}}".
 *
 * @property int $identrhistory
 * @property string $date
 * @property int $user_iduser
 *
 * @property User $userIduser
 */
class Entrhistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%entrhistory}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['user_iduser'], 'required'],
            [['user_iduser'], 'integer'],
            [['user_iduser'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_iduser' => 'iduser']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'identrhistory' => Yii::t('db-label', 'Identrhistory'),
            'date' => Yii::t('db-label', 'Date'),
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
