<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Premios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="premios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'categoria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ganador')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kairish_id')->textInput() ?>

    <?= $form->field($model, 'votos')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
