<?php

/**
 *
 * @package    Material Dashboard Yii2
 * @author     CodersEden <hello@coderseden.com>
 * @link       https://www.coderseden.com
 * @copyright  2020 Material Dashboard Yii2 (https://www.coderseden.com)
 * @license    MIT - https://www.coderseden.com
 * @since      1.0
 */

use yii\bootstrap4\ActiveForm;

?>
<div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
        <?php $form = ActiveForm::begin( [
	        'id'     => 'login-form',
	        'method' => 'post',
        ] ); ?>
          <div class="card card-login card-hidden">
            <div class="card-header card-header-rose text-center">
              <h4 class="card-title text-center">Kairish Login</h4>
            </div>
              <div class="card-body">
                <div class="form-group has-default">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">account_box</i>
                    </span>
                  </div>
	                <?= $form->field( $model, 'email', [
		                'template' => '{input}',
		                'options'  => [
			                'class' => 'form-group has-feedback',
			                'tag'   => false,
		                ]
	                ] )->textInput( [ 'placeholder' => 'Usuario' ] )->label( false ); ?>
                </div>
              </div>
              <div class="form-group has-default">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
	                <?= $form->field( $model, 'password', [
		                'template' => '{input}',
		                'options'  => [
			                'class' => 'form-group has-feedback',
			                'tag'   => false,
		                ]
	                ] )->passwordInput( [ 'placeholder' => 'Password' ] )->label( false ); ?>
                </div>
              </div>
                <div class="form-check">
                      <label class="form-check-label">
                <?= $form->field( $model, 'rememberMe', [
	                'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                ] )->checkbox()->label(); ?>
                      </label>
                </div>
                <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons"></i>
                    </span>
                  </div>
	                <?= $form->errorSummary( $model ) ?>
                </div>
              </div>
            </div>
            <div class="card-footer justify-content-center">
              <button type="submit" class="btn btn-primary btn-round">Iniciar sesión</button>
            </div>
          </div>
	      <?php ActiveForm::end(); ?>
      </div>
    </div>
</div>