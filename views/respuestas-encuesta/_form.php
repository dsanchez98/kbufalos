<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RespuestasEncuesta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="respuestas-encuesta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'respuesta')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'responde_id')->textInput() ?>

    <?= $form->field($model, 'pregunta_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
