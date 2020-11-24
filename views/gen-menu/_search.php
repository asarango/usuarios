<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GenMenuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gen-menu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'creado_por') ?>

    <?= $form->field($model, 'creado_fecha') ?>

    <?= $form->field($model, 'actualizado_por') ?>

    <?= $form->field($model, 'actualizado_fecha') ?>

    <?= $form->field($model, 'id') ?>

    <?php // echo $form->field($model, 'codigo') ?>

    <?php // echo $form->field($model, 'nombre') ?>

    <?php // echo $form->field($model, 'icono') ?>

    <?php // echo $form->field($model, 'ruta_menu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
