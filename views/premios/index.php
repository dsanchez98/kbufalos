<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PremiosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Premios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="premios-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Premios', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'categoria',
            'ganador',
            'kairish_id',
            'votos',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
