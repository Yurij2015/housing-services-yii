<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;


/* @var $this yii\web\View */
/* @var $model app\models\PhotoDoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="photo-doc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_iduser')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'doclink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doclink')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
        'language' => 'ru',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>

    <?= $form->field($model, 'dateadd')->textInput() ?>

    <?= $form->field($model, 'category_idcategory')->textInput() ?>

    <?= $form->field($model, 'doc_file')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('mdLib', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
