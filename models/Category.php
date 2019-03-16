<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property int $idcategory
 * @property string $categoryname
 * @property string $categorydescription
 *
 * @property PhotoDoc[] $photoDocs
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categoryname'], 'required'],
            [['categoryname'], 'string', 'max' => 100],
            [['categorydescription'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcategory' => Yii::t('db-label', 'Idcategory'),
            'categoryname' => Yii::t('db-label', 'Categoryname'),
            'categorydescription' => Yii::t('db-label', 'Categorydescription'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotoDocs()
    {
        return $this->hasMany(PhotoDoc::className(), ['category_idcategory' => 'idcategory']);
    }
}
