<?php
/**
 * Created by PhpStorm.
 * User: Alex Mo
 * Date: 17-Mar-19
 * Time: 14:53
 */

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, docx, doc, png'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs($_SERVER["DOCUMENT_ROOT"] . '/uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }

    public function attributeLabels()
    {
        return [
            'imageFile' => Yii::t('db-label', 'imageFile'),

        ];
    }

}