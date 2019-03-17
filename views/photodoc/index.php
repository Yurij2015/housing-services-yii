<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('mdLib', 'Photo Docs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photo-doc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>

    <p>
        <?= Html::a(Yii::t('mdLib', 'Create Photo Doc'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <!--    вывод связанных данных
    http://php-lessons.com/blog/2016/06/06/yii2-view-data-ralated-tables/-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'idimage',
            //'user_iduser',
            [
                'attribute' => 'user_iduser',
                'value' => 'user.username',
            ],
            'name',
            'description',
            //'doclink',
            //'dateadd',
            //'category_idcategory',
            [
                'attribute' => 'category_idcategory',
                'value' => 'category.categoryname',
            ],
            //'category.categoryname',
            //'doc_file',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
