<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\preguntas_encuesta */

$this->title = 'Create Preguntas Encuesta';
$this->params['breadcrumbs'][] = ['label' => 'Preguntas Encuestas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="preguntas-encuesta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
