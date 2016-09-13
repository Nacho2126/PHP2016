<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GastonTableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gaston Tables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gaston-table-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gaston Table', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Modelo',
            'Año',
            'Mes',
            'Dia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
