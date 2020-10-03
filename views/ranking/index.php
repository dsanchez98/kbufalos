<?php

use app\models\Ranking;
use app\models\User;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use yii\data\SqlDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RankingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rankings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ranking-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Participar en el ranking', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   


</div>


<div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Ranking World Pandemonium Tour</h4>
            </div>
           

            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      Nombre
                    </th>
                    <th>
                      Torneos Ganados
                    </th>
                    <th>
                      Puntos
                    </th>
                  </thead>
                  <tbody>
            <?php
            
            $query='';
              $dataProvider = new SqlDataProvider([
                  'sql' => '
                  SELECT user.username, user.first_name, user.last_name, p_ranking.* FROM `user` JOIN `p_ranking` ON user.user_id = p_ranking.user_id
              ',
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