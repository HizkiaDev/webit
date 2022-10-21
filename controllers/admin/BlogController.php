<?php

namespace app\controllers\admin;

use app\models\Blog;
use app\models\BlogSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\components\AbahlanaHelpers;

/**
 * BlogController implements the CRUD actions for Blog model.
 */
class BlogController extends ControllerAdmin
{
    /**
     * @inheritDoc
     */
    protected $imgdir = 'img/blog/';
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Blog models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Blog model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Blog model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Blog();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $gambar = UploadedFile::getInstance($model, 'gambar');
                if($model->validate()){
                    // $model->save();                    
                    if(!empty($gambar)){                        
                        $filename = '_' . AbahlanaHelpers::gen_uuid()  . '_.' . $gambar->extension;
                        $gambar->saveAs($this->imgdir . $filename);
                        $model->gambar = $filename;
                    }
                    if ($model->save())
                        return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Blog model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        // if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->id]);
        // }

        
        if ($this->request->isPost&& $model->load($this->request->post())) {
            $gambar = UploadedFile::getInstance($model, 'gambar');
            $m2 = $this->findModel($model->id);
            if($model->validate()){                 
                    if(!empty($gambar)){
                        $this->hapusGambarLama($m2->gambar);
                        
                        $filename = '_' . AbahlanaHelpers::gen_uuid()  . '_.' . $gambar->extension;
                        $gambar->saveAs('img/blog/' . $filename);
                        $model->gambar = $filename;
                    }
                    else{
                        $model->gambar = $m2->gambar;
                    }

                    if ($model->save())
                    return $this->redirect(['view', 'id' => $model->id]);
            }
            
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Blog model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Blog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Blog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Blog::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function hapusGambarLama($filename){
        $fm2 = \Yii::$app->basePath . '/web/' . $this->imgdir . $filename;
        unlink($fm2);
    }
}