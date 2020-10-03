<div class="content">
<?php use yii\widgets\ActiveForm; 
$form = ActiveForm::begin([
    'method' => 'post',
    'action' => ['users/guardarvoto'],
]);?>
<div class="row">

<?php

use app\models\User;
use yii\helpers\Html;
use app\controllers\UsersController;

if(Yii::$app->user->identity->votado == 'si'){
    Yii::$app->response->redirect(['/tables']);
}
foreach ($cantantes as $user) {
    if($user['user_id']!=Yii::$app->user->identity->id){
    $model = UsersController::findModel($user['user_id']);
    ?>
    





  <div class="col-md-3">
    <div class="card text-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=
    $user['first_name']. ' '. $user['last_name']
    ?></h5>
    <p class="card-text">Cancion: <?=$user['cancion']?></p>
    <div class="form-group">

  


  <?= $form->field($model, "puntos[$user[user_id]]")->dropDownList(app\models\User::$puntuaciones, ['prompt' => 'Selecciona...']) ?>




  <!-- <select class="form-control" id="sel1">
   <?php

   
   
   foreach(User::$puntuaciones as $punto)
            //echo "<option>$punto</option>";
   ?>
  </select> -->
</div> 
  </div>
</div>
</div>
<?php
}
}
?>

</div>
<?= Html::submitButton(\Yii::t('app', 'Votar'), ['class' => $modelvotante->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
<?php ActiveForm::end(); ?>
</div>