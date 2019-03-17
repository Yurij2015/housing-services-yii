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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idimage',
            'user_iduser',
            'name',
            'description',
            'doclink',
            'dateadd',
            'category_idcategory',
            'doc_file',
        ],
    ]) ?>

</div>