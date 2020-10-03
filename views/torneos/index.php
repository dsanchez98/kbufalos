<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use app\models\Torneos;

?>
            
<h1 class="text-center">Torneos  Pandemonium Ball</h1>

    <div class="container-fluid">
    
      
 


        <?php 
        echo Html::a(Html::tag('b', 'Crear torneo', ['class' => 'col-md-6']) , ['torneos/create'], [
            'class' => 'btn btn-primary col-md-2',
            'rel'=>"tooltip",
            
        ]);
               
               $dataProvider = new ActiveDataProvider([
                   'query' => Torneos::find()->orderBy([
                    'fecha' => SORT_ASC      
                    ]),
                   'pagination' => [
                       'pageSize' => 20,
                   ],
               ]);
       
               $columns = 4;
               $cl = 12 / $columns;
               
               echo ListView::widget([
                       'dataProvider' => $dataProvider,
                       'layout'       => '{items}{pager}',
                       'itemOptions'  => ['class' => "col-sm-$cl"],
                       'itemView'     => '_post',
                       'options'      => ['class' => 'grid-list-view' ],
                       'beforeItem'   => function ($model, $key, $index, $widget) use ($columns) {
                           if ( $index % $columns == 0 ) {
                               return "<div class='row'>";
                           }
                       },
               
                       'afterItem' => function ($model, $key, $index, $widget) use ($columns) {
                           if ( $index != 0 && $index % ($columns - 1) == 0 ) {
                               return "</div>";
                           }
                       }
               ]);
               
               if ( $dataProvider->totalCount % $columns != 0 ) {
                   echo "</div>";
               }
               ?>
               


</div>



