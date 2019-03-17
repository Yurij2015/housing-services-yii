<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->title = $model->categoryname;
$this->params['breadcrumbs'][] = ['label' => Yii::t('mdLib', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('mdLib', 'Update'), ['update', 'id' => $model->idcategory], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('mdLib', 'Delete'), ['delete', 'id' => $model->idcategory], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('mdLib', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'idcategory',
            'categoryname',
            'categorydescription',
        ],
    ]) ?>

</div>
