<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->title = Yii::t('mdLib', 'Update Category: {name}', [
    'name' => $model->categoryname,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('mdLib', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcategory, 'url' => ['view', 'id' => $model->idcategory]];
$this->params['breadcrumbs'][] = Yii::t('mdLib', 'Update');
?>
<div class="category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
