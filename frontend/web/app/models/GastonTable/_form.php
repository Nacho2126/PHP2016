<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GastonTable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gaston-table-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Modelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Año')->textInput() ?>

    <?= $form->field($model, 'Mes')->textInput() ?>

    <?= $form->field($model, 'Dia')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
