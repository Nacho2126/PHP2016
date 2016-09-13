<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GastonTableSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gaston-table-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Modelo') ?>

    <?= $form->field($model, 'Año') ?>

    <?= $form->field($model, 'Mes') ?>

    <?= $form->field($model, 'Dia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
