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

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('mdLib', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end() ?>