<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usercustomer */

$this->title = Yii::t('mdLib', 'Update Usercustomer: {name}', [
    'name' => $model->iduser,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('mdLib', 'Usercustomers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iduser, 'url' => ['view', 'id' => $model->iduser]];
$this->params['breadcrumbs'][] = Yii::t('mdLib', 'Update');
?>
<div class="usercustomer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
