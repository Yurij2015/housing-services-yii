<?php
/**
 * Created by PhpStorm.
 * User: Alex Mo
 * Date: 17-Mar-19
 * Time: 14:45
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<?php if ($model->imageFile): ?>
    <?= 'Вы загрузили на сервер изображение:' ?>
    <img src="/web/uploads/<?= $model->imageFile ?>" alt="" width="700px">
<?php endif; ?>

<div class="row">
    <div class="col-lg-5">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

        <?= $form->field($model, 'imageFile')->fileInput() ?>


        <div class="form-group">
            <?= Html::submitButton(Yii::t('mdLib', 'Save'), ['class' => 'btn btn-success']) ?>

            <?= Html::a(Yii::t('mdLib', 'Back'), ['index'], ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end() ?>
    </div>
</div>
