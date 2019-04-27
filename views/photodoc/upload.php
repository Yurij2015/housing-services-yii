<?php
/**
 * Created by PhpStorm.
 * User: Alex Mo
 * Date: 17-Mar-19
 * Time: 14:45
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = Yii::t('mdLib', 'imageFile');
$this->params['breadcrumbs'][] = ['label' => Yii::t('db-label', 'imageFile'), 'url' => ['upload']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php if ($model->imageFile): ?>
    <?= 'Вы загрузили на сервер изображение:' ?>
    <img src="/web/uploads/<?= $model->imageFile ?>" alt="" width="700px">
<?php endif; ?>
<div class="row">
    <div class="col-lg-5">
        <!--Форма добавления изображения на сервер-->
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
        <!--поле выбора файла-->
        <?= $form->field($model, 'imageFile')->fileInput() ?>
        <div class="form-group">
            <!--            кнопка сохранения изображения-->
            <?= Html::submitButton(Yii::t('mdLib', 'Save'), ['class' => 'btn btn-success']) ?>
            <!--кнопка возвращения на страницу документа-->
            <?= Html::a(Yii::t('mdLib', 'Back'), ['index'], ['class' => 'btn btn-success']) ?>
        </div>
        <?php ActiveForm::end() ?>
    </div>
</div>
