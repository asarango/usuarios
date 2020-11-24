<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AccPerfil */

$this->title = 'Update Acc Perfil: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Acc Perfils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="acc-perfil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
