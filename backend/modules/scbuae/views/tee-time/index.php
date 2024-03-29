<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\scbuae\models\TeeTimeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tee Times';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tee-time-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tee Time', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'TeeTimeId:datetime',
            'Time',
            'GolfCourseId',
            'IsActive',
            'LastUpdated',
            //'CreatedOn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
