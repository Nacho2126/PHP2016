<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GastonTable */

$this->title = 'Create Gaston Table';
$this->params['breadcrumbs'][] = ['label' => 'Gaston Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gaston-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
