<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PermisosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Permisos';

?>
<div class="permisos-index">
<br>
<br>
    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [


            'activarcancion',
            'activarvotos',


        ],
    ]); ?>

    <?php Pjax::end(); ?>

    
   
        <?= Html::a('Abrir/cerrar votaciones', ['votar'], ['class' => 'btn btn-success']) ?>

        <?= Html::a('Mostrar/no mostrar canciones a TODOS', ['canciones'], ['class' => 'btn btn-success']) ?>



</div>