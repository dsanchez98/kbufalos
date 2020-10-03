<?php

namespace app\controllers;

use Yii;
use app\models\Permisos;
use app\models\PermisosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PermisosController implements the CRUD actions for Permisos model.
 */
class PermisosController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Permisos models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->identity->rol!='ADM')
        return $this->redirect(['/tables']);

        $searchModel = new PermisosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Permisos model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionView($id)
    // {
    //     return $this->render('view', [
    //         'model' => $this->findModel($id),
    //     ]);
    // }

    /**
     * Creates a new Permisos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    // public function actionCreate()
    // {
    //     $model = new Permisos();

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id]);
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Updates an existing Permisos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if(Yii::$app->user->identity->rol!='ADM')
        return $this->redirect(['/tables']);
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Permisos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionDelete($id)
    // {
    //     $this->findModel($id)->delete();

    //     return $this->redirect(['index']);
    // }

    /**
     * Finds the Permisos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Permisos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected static function findModel($id)
    {
        if (($model = Permisos::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }



    public static function comprobarcancion()
    {
        $model= PermisosController::findModel(1);
        if($model->activarcancion=='no')
            return false;
        else if($model->activarcancion=='si')
            return true;

    }
    public static function comprobarvotos()
    {
        $model= PermisosController::findModel(1);
        if($model->activarvotos=='no')
            return false;
        else if($model->activarvotos=='si')
            return true;

    }
    public function actionCanciones()
    {
        if(Yii::$app->user->identity->rol!='ADM')
        return $this->redirect(['/tables']);
        
        $model= PermisosController::findModel(1);
        if($model->activarcancion=='no'){
        $model->activarcancion='si';
        $model->save();
        return $this->redirect(['index']);}
        else if ($model->activarcancion=='si'){
        $model->activarcancion='no';
        $model->save();
        return $this->redirect(['index']); 
        }

    }
    public function actionVotar()
    {
        if(Yii::$app->user->identity->rol!='ADM')
        return $this->redirect(['/tables']);

        $model= PermisosController::findModel(1);
        if($model->activarvotos=='no'){
        $model->activarvotos='si';
        $model->save();
        
        return $this->redirect(['index']);
        }
        else if($model->activarvotos=='si'){
               $model->activarvotos='no';
        $model->save();
        
        return $this->redirect(['index']);
        }

    }
}
