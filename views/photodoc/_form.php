<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
use app\models\Category;
use yii\helpers\ArrayHelper;
use app\models\User;


/* @var $this yii\web\View */
/* @var $model app\models\PhotoDoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="photo-doc-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php $user = User::find()->all();
    // формируем массив, с ключем равным полю 'idcategory' и значением равным полю 'categoryname'
    $items = ArrayHelper::map($user, 'id', 'username');
    $params = ['prompt' => 'Потребитель']; ?>
    <?= $form->field($model, 'user_iduser')->dropDownList($items, $params); ?>

<!--    --><?//= $form->field($model, 'user_iduser')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <!--    --><? //= $form->field($model, 'doclink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doclink')->widget(TinyMce::className(), [
        'options' => ['rows' => 20],
        'language' => 'ru',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]); ?>

    <?= $form->field($model, 'dateadd')->textInput() ?>

    <!--https://p0vidl0.info/yii2-vypadayushhij-spisok-dropdownlist.html-->
    <?php $category = Category::find()->all();
    // формируем массив, с ключем равным полю 'idcategory' и значением равным полю 'categoryname'
    $items = ArrayHelper::map($category, 'idcategory', 'categoryname');
    $params = ['prompt' => 'Выберите категорию']; ?>
    <?= $form->field($model, 'category_idcategory')->dropDownList($items, $params); ?>
    <!--    --><? //= $form->field($model, 'category_idcategory')->textInput() ?>

<!--    --><?//= $form->field($model, 'doc_file')->textInput() ?>
<!--    --><?//= $form->field($model, 'doc_file')->fileInput()?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('mdLib', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
