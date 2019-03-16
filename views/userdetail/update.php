<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Userdetail */

$this->title = Yii::t('mdLib', 'Update Userdetail: {name}', [
    'name' => $model->iduserdetail,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('mdLib', 'Userdetails'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iduserdetail, 'url' => ['view', 'id' => $model->iduserdetail]];
$this->params['breadcrumbs'][] = Yii::t('mdLib', 'Update');
?>
<div class="userdetail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
