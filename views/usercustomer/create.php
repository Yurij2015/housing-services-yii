<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usercustomer */

$this->title = Yii::t('mdLib', 'Create Usercustomer');
$this->params['breadcrumbs'][] = ['label' => Yii::t('mdLib', 'Usercustomers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usercustomer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
