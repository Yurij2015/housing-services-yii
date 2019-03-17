<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Userdetail */

$this->title = $model->iduserdetail;
$this->params['breadcrumbs'][] = ['label' => Yii::t('mdLib', 'Userdetails'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="userdetail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('mdLib', 'Update'), ['update', 'id' => $model->iduserdetail], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('mdLib', 'Delete'), ['delete', 'id' => $model->iduserdetail], [
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
            'iduserdetail',
            'adress',
            'phone',
            'about',
            'info',
            'user_iduser',
        ],
    ]) ?>

</div>
