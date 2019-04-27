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

// класс загрузки файла на сервера
class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

// правила для загружаемых файлов
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, docx, doc, png'],
        ];
    }

// метод загрузки файла, формирование пути и сохранение файла
    public function upload()
    {
        //https://webformyself.com/yii2-izobrazheniya/
        if ($this->validate()) {
            $this->imageFile->saveAs($_SERVER["DOCUMENT_ROOT"] . '/web/uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            //$this->imageFile->saveAs( '/uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);

            return true;
        } else {
            return false;
        }
    }
// перевод аттрибутов
    public function attributeLabels()
    {
        return [
            'imageFile' => Yii::t('db-label', 'imageFile'),

        ];
    }

}

?>
