<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usercustomer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usercustomer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userlogin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usersecondname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hpassword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datereg')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('mdLib', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
