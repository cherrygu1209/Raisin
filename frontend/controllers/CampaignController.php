<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Campaign;
use frontend\models\CampaignSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\uploads;
use yii\web\UploadedFile;

/**
 * CampaignController implements the CRUD actions for Campaign model.
 */
class CampaignController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Campaign models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CampaignSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Campaign model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Campaign model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Campaign();

        if ($model->load(Yii::$app->request->post())) {
            $model-> c_author = Yii::$app->user->identity->getId();
            
            
            //$imageName = $model->c_title;
            $model->file = UploadedFile::getInstance($model,'file');
            $model->file->saveAs('uploads/'.$model->file->baseName.'.'.$model->file->extension);
            
            $model->c_image=$model->file->baseName.'.'.$model->file->extension;
            
            if($model->save(false)){
                return $this->redirect(['view', 'id' => $model->c_id]);
            }
        }
        return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing Campaign model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if($model->load(Yii::$app->request->post())){
            $model->c_author = Yii::$app->user->identity->getId();
            $model->file = UploadedFile::getInstance($model,'file');
            $model->file->saveAs('uploads/'.$model->file->baseName.'.'.$model->file->extension);
            
            $model->c_image=$model->file->baseName.'.'.$model->file->extension;
            if($model->save(false)){
                return $this->redirect(['view','id'=>$id]);
            }
        }
        return $this->render('update',['model'=>$model]);
    }

    /**
     * Deletes an existing Campaign model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Campaign model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Campaign the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Campaign::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
