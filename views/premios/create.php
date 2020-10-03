<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Premios */

$this->title = 'Create Premios';
$this->params['breadcrumbs'][] = ['label' => 'Premios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="premios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
