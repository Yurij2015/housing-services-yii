<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%photo_doc}}".
 *
 * @property int $idimage
 * @property int $user_iduser
 * @property string $name
 * @property string $description
 * @property string $doclink
 * @property string $dateadd
 * @property int $category_idcategory
 * @property resource $doc_file
 *
 * @property Category $categoryIdcategory
 * @property User $userIduser
 */
class PhotoDoc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%photo_doc}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_iduser', 'doclink', 'category_idcategory'], 'required'],
            [['user_iduser', 'category_idcategory'], 'integer'],
            [['dateadd', 'categoryname'], 'safe'],
            [['doc_file'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['description', 'doclink'], 'string', 'max' => 255],
            [['category_idcategory'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_idcategory' => 'idcategory']],
            [['user_iduser'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_iduser' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idimage' => Yii::t('db-label', 'Idimage'),
            'user_iduser' => Yii::t('db-label', 'User Iduser'),
            'name' => Yii::t('db-label', 'Name'),
            'description' => Yii::t('db-label', 'Description'),
            'doclink' => Yii::t('db-label', 'Doclink'),
            'dateadd' => Yii::t('db-label', 'Dateadd'),
            'category_idcategory' => Yii::t('db-label', 'Category Idcategory'),
            'doc_file' => Yii::t('db-label', 'Doc File'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getCategoryIdcategory()
//    {
//        return $this->hasOne(Category::className(), ['idcategory' => 'category_idcategory']);
//    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['idcategory' => 'category_idcategory']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getUserIduser()
//    {
//        return $this->hasOne(User::className(), ['id' => 'user_iduser']);
//    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_iduser']);
    }

}
