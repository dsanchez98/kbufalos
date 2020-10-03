<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\preguntas_encuesta */

$this->title = 'Update Preguntas Encuesta: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Preguntas Encuestas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="preguntas-encuesta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
