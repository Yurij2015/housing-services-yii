<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usercustomer */

$this->title = $model->iduser;
$this->params['breadcrumbs'][] = ['label' => Yii::t('mdLib', 'Usercustomers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="usercustomer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('mdLib', 'Update'), ['update', 'id' => $model->iduser], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('mdLib', 'Delete'), ['delete', 'id' => $model->iduser], [
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
            'iduser',
            'userlogin',
            'username',
            'usersecondname',
            'hpassword',
            'datereg',
        ],
    ]) ?>

</div>
