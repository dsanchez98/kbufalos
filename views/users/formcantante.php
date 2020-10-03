<?php


use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
?>
<div class="content">
    <div class="container-fluid">
        <div class="card ">
    <div class="card-header card-header-primary card-header-icon">
        <div class="card-icon">
            <i class="material-icons">account_box</i>
        </div>
        <h4 class="card-title">
            Formulario de cantante
        </h4>
    </div>
    <div class="card-body">
      <?php $form = ActiveForm::begin([
	      'fieldConfig' => [
		      'template' => "{input} {error}",
	      ]
      ]); ?>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group bmd-form-group">
                    <label for="<?=Html::getInputId($model, 'first_name');?>" class="bmd-label-floating"><?=Html::activeLabel($model,'first_name');?></label>
                    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true])->label(false); ?>
                    <span class="bmd-help"><?=Html::activeHint($model,'first_name');?></span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group bmd-form-group">
                    <label for="<?=Html::getInputId($model, 'last_name');?>" class="bmd-label-floating"><?=Html::activeLabel($model,'last_name');?></label>
	                <?= $form->field($model, 'last_name')->textInput(['maxlength' => true])->label(false); ?>
                    <span class="bmd-help"><?=Html::activeHint($model,'last_name');?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group bmd-form-group">
                    <label for="<?=Html::getInputId($model, 'email');?>" class="bmd-label-floating"><?=Html::activeLabel($model,'email');?></label>
	                <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label(false); ?>
                    <span class="bmd-help"><?=Html::activeHint($model,'email');?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group bmd-form-group">
                    <label for="<?=Html::getInputId($model, 'cancion');?>" class="bmd-label-floating">Formato: Cancion - artista</label>
	                <?= $form->field($model, 'cancion')->textInput(['maxlength' => true])->label(false); ?>
                    <span class="bmd-help"><?=Html::activeHint($model,'cancion');?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer ml-auto mr-auto">
        <?= Html::submitButton(\Yii::t('app', 'Apuntarse al concurso'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	<?php ActiveForm::end(); ?>
</div>
    </div>
</div>