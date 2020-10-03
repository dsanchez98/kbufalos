

 <?php
              use yii\widgets\ListView;
              use yii\data\ActiveDataProvider;
              use app\models\User;
              use yii\helpers\Html;
              use app\controllers\PermisosController;
              ?>

<div class="content">
<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
         <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
         <h4><i class="icon fa fa-check"></i>Correcto!</h4>
         <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>
<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissable">
         <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
         <h4>Error!</h4>
         <?= Yii::$app->session->getFlash('error') ?>
    </div>
<?php endif; ?>


    <div class="container-fluid">
      <div class="row">
      
      <?php 
      
      if(!PermisosController::comprobarvotos()){
        echo "<button class ='btn btn-danger col-md-2 disabled'>Votaciones cerradas </button>";
      } else if(isset(Yii::$app->user->identity)&&Yii::$app->user->identity->votado != 'si')
                echo Html::a(Html::tag('b', 'Votar', ['class' => 'col-md-6']) , ['users/votar'], [
                  'class' => 'btn btn-success col-md-2',
                  'rel'=>"tooltip",
                  
              ]);else if(isset(Yii::$app->user->identity)&&Yii::$app->user->identity->votado == 'si')
                echo "<button class ='btn btn-danger col-md-2 disabled'>Ya has votado</button>"
                 ?>
  
                <?php if(isset(Yii::$app->user->identity)&&Yii::$app->user->identity->cantante != 'si')
                  echo Html::a(Html::tag('b', 'Voy a cantar', ['class' => 'col-md-6']) , ['users/cantante'], [
                    'class' => 'btn btn-primary col-md-2 disabled',
                    'rel'=>"tooltip",
                    
                ]);else
                echo "<button class ='btn btn-danger col-md-2 disabled'>Ya estás apuntado</button>"
                 ?>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Resultados Tu Kairish Me Suena</h4>
            </div>
           

            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      Nombre
                    </th>
                    <th>
                      Canción
                    </th>
                    <th>
                      Puntos
                    </th>
                  </thead>
                  <tbody>
            <?php
            

              $dataProvider = new ActiveDataProvider([
                  'query' => User::find()->where(['cantante' => 'si'])->orderBy('puntos DESC'),
                  'pagination' => [
                      'pageSize' => 20,
                  ],
              ]);

              echo ListView::widget([
                  'dataProvider' => $dataProvider,
                  'itemView' => '_post',
                  'layout'=>'{items}'
              ]);

?>
         </tbody>
                </table>
              </div>
            </div>   
          </div>
        </div>
    </div>
</div>