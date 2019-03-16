<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PhotoDoc */

$this->title = Yii::t('mdLib', 'Update Photo Doc: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('mdLib', 'Photo Docs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->idimage]];
$this->params['breadcrumbs'][] = Yii::t('mdLib', 'Update');
?>
<div class="photo-doc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
