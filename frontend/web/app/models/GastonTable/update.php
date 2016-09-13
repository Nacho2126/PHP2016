<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GastonTable */

$this->title = 'Update Gaston Table: ' . $model->Modelo;
$this->params['breadcrumbs'][] = ['label' => 'Gaston Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Modelo, 'url' => ['view', 'id' => $model->Modelo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gaston-table-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
