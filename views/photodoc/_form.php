<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
use app\models\Category;
use yii\helpers\ArrayHelper;
use app\models\User;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\PhotoDoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="photo-doc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $user = User::find()->all();
    // формируем массив, с ключем равным полю 'idcategory' и значением равным полю 'categoryname'
    $items = ArrayHelper::map($user, 'id', 'username');
    $params = ['prompt' => 'Потребитель']; ?>
    // Поле выбора пользователя
    <?= $form->field($model, 'user_iduser')->dropDownList($items, $params); ?>

    <!--    --><? //= $form->field($model, 'user_iduser')->textInput() ?>
    // Поле ввода названия документа
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    // Поле ввода описания документа
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <!--    --><? //= $form->field($model, 'doclink')->textInput(['maxlength' => true]) ?>
    // Поле ввода данных о услугах ЖКГ с подключенным визуальных редактором TinyMCE
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
    <?=
    // поле ввода даты с подключенным виджетом выбора даты
    $form->field($model, 'dateadd')->widget(DatePicker::classname(), [
        'value' => date('Y-M-d'),
    ]);
    ?>
    <!--https://p0vidl0.info/yii2-vypadayushhij-spisok-dropdownlist.html-->
    <?php $category = Category::find()->all();
    // поле выбора категории
    // формируем массив, с ключем равным полю 'idcategory' и значением равным полю 'categoryname'
    $items = ArrayHelper::map($category, 'idcategory', 'categoryname');
    $params = ['prompt' => 'Выберите категорию']; ?>
    <?= $form->field($model, 'category_idcategory')->dropDownList($items, $params); ?>
    <div class="form-group">
        <!--        Кнопка отправки данных-->
        <?= Html::submitButton(Yii::t('mdLib', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
