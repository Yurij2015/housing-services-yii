<?php
/**
 * Project: housing-services-yii
 * Filename: signup.php
 * Date: 16.03.2019
 * Time: 22:01
 */
use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\SignupForm */

$this->title = 'Регистрация в сервисе';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--Форма регистрации в системе-->
<div class="user-default-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Заполните, пожалуйста все нижепредствленные поля!</p>
    <div class="row">
        <div class="col-lg-5">
<!--            Блок формы регистранции в системе-->
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
<!--            поле ввода имени пользователя-->
            <?= $form->field($model, 'username') ?>
<!--            поле ввода электронной почты пользователя-->
            <?= $form->field($model, 'email') ?>
<!--            поле ввода пароля-->
            <?= $form->field($model, 'password')->passwordInput() ?>
<!--            вывод изображения капчи и поле для ее ввода-->
            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'captchaAction' => 'user/captcha',
                // формирование внешнего вида поля ввода капчи
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
            ]) ?>
            <div class="form-group">
<!--                Кнопка отправки формы регистрации-->
                <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>