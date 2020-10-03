<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\preguntas_encuesta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="preguntas-encuesta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'encuesta_id')->textInput() ?>

    <?= $form->field($model, 'organiza_id')->textInput() ?>

    <?= $form->field($model, 'pregunta')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
