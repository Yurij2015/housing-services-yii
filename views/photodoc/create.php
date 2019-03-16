<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PhotoDoc */

$this->title = Yii::t('mdLib', 'Create Photo Doc');
$this->params['breadcrumbs'][] = ['label' => Yii::t('mdLib', 'Photo Docs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photo-doc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
