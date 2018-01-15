<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Campaign;
use frontend\models\Reward;
use frontend\models\CampaignSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\uploads;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;
use frontend\models\Comment;

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
        $author = Campaign::model()->findByPk($id);
        
        $comment = new Comment();
        $comments = Comment::find()->where(['comment_camp_id'=>$id])->all();
        
        if($comment->load(Yii::$app->request->post())){
            $comment->comment_camp_id = $id;
            $comment->comment_user_id = Yii::$app->user->identity->getId();
            
            if($comment->save(false)){
            $comments = Comment::find()->where(['comment_camp_id'=>$id])->all();
            return $this->render('view', [
            'model' => $this->findModel($id),
            'comments' => $comments,
            ]);
            }
        }
        return $this->render('view', [
            'model' => $this->findModel($id),
            'author' => $author,
            'comments' => $comments,
        ]);
    }
    
    public function actionFund($id)
    {
        return $this->render('fund', [
            'model' => $this->findModel($id),
            'author' => $author,
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
        $reward = new Reward();

        if ($model->load(Yii::$app->request->post())) {
            $model-> c_author = Yii::$app->user->identity->getId();
            
           //$imageName = $model->c_title;
            $model->file = UploadedFile::getInstance($model,'file');
            $model->file->saveAs('uploads/campaign_img/'.$model->file->baseName.'.'.$model->file->extension);
            $model->c_image=$model->file->baseName.'.'.$model->file->extension;
            
//            $model->videoFile = UploadedFile::getInstance($model, 'videoFile');
//            $model->videoFile->saveAs('uploads/campaign_video/'.$model->videoFile->baseName.'.'.$model->videoFile->extension);
//            $model->c_video=$model->videoFile->baseName.'.'.$model->videoFile->extension;
                                  
            if($model->save(false)){              
                $reward->load(Yii::$app->request->post());
                $reward->c_id = $model->c_id;
                if ($reward->save(false)){
                return $this->redirect(['view', 'id' => $model->c_id]);
                }
            }
        }
        return $this->render('create', [
                'model' => $model,
                'reward' => $reward,
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
    
    public function actionPortfolio()
    {
        $user_id = Yii::$app->user->identity->id;
        $model = new ActiveDataProvider([
                    'query'=> Campaign::find()->where(['c_author'=>$user_id]),
                    'pagination'=>[
                        'pageSize'=>5
                    ]
        ]);
        return $this->render('my_campaigns',['model'=>$model]);
        //return $this->render('portfolio');
    }
    
}
