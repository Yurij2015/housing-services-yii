<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PhotoDoc */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('mdLib', 'Photo Docs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="photo-doc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('mdLib', 'Update'), ['update', 'id' => $model->idimage], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('mdLib', 'Delete'), ['delete', 'id' => $model->idimage], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('mdLib', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <!--    https://p0vidl0.info/yii2-api-guides/guide-ru-output-data-widgets.html-->
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idimage',
            [
                'attribute' => 'user_iduser',
                'value' => $model->user->username,
            ],
            // 'user_iduser',
            'name',
            'description',
            'doclink:html',
            'dateadd',
            //'category_idcategory',
            [
                'attribute' => 'category_idcategory',
                'value' => $model->category->categoryname,
            ],
            'doc_file:html',
        ],
    ]) ?>

</div>
