<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ranking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ranking-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'puntos')->textInput() ?>

    <?= $form->field($model, 't_ganados')->textInput() ?>

    <?= $form->field($model, 'p_ganados')->textInput() ?>

    <?= $form->field($model, 'p_perdidos')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
