<?php

namespace app\controllers\admin;

use app\models\Dosen;
use app\models\DosenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use DateTime;
use app\components\AbahlanaHelpers;
/**
 * DosenController implements the CRUD actions for Dosen model.
 */
class DosenController extends ControllerAdmin
{
    /**
     * @inheritDoc
     */
    protected $imgdir = 'images/dosen/';
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
     * Lists all Dosen models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DosenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dosen model.
     * @param int $id_dosen Id Dosen
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_dosen)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_dosen),
        ]);
    }

    /**
     * Creates a new Dosen model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Dosen();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $gambar = UploadedFile::getInstance($model, 'foto');
                
                // tanggalan diperbaiki juga di sini  karena format input:   'format' => 'dd-mm-yyyy',
                $d1 = DateTime::createFromFormat("d-m-Y", $model->ttl);
                $model->ttl =  $d1->format('Y-m-d');

                if($model->validate()){
                    // $model->save();
                    $filename = $gambar->getBaseName() . $gambar->extension;
                    if(!empty($gambar)){
                        $gambar->saveAs('images/dosen/' . $filename);
                        $model->foto = $filename;
                    }
                    if ($model->save())
                        return $this->redirect(['view', 'id_dosen' => $model->id_dosen]);
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
     * Updates an existing Dosen model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_dosen Id Dosen
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_dosen)
    {
        $model = $this->findModel($id_dosen);

        if ($this->request->isPost&& $model->load($this->request->post())) {
            $gambar = UploadedFile::getInstance($model, 'foto');
            $m2 = $this->findModel($model->id_dosen);
            if($model->validate()){                 
                    if(!empty($gambar)){
                        //$this->hapusGambarLama($m2->foto);
                        
                        $filename = $gambar->name; //'_' . AbahlanaHelpers::gen_uuid()  . '_.' . $gambar->extension;
                        $gambar->saveAs('images/dosen/' . $filename);
                        $model->foto = $filename;
                    }
                    else{
                        $model->foto = $m2->foto;
                    }

                    if ($model->save())
                    return $this->redirect(['view', 'id_dosen' => $model->id_dosen]);
            }
            
        }

        // agar input sesuai format 
        if(!empty($model->ttl)){
            // $d1 = DateTime::createFromFormat("Y-m-d", $model->ttl);
            // $model->ttl= $d1->format('d/m/Y');

        }
        
        if ($this->request->isPost && $model->load($this->request->post())){
            // $d1 = DateTime::createFromFormat("d/m/Y", $model->ttl);
            // $model->ttl = $d1->format('Y-m-d');            
            
            if ($model->save()){
                return $this->redirect(['view', 'id_dosen' => $model->id_dosen]);
            }
        }

        /*
        // bagian kode lama
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_dosen' => $model->id_dosen]);
        }
        */

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Dosen model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_dosen Id Dosen
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_dosen)
    {
        $this->findModel($id_dosen)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dosen model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_dosen Id Dosen
     * @return Dosen the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_dosen)
    {
        if (($model = Dosen::findOne(['id_dosen' => $id_dosen])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function hapusGambarLama($filename){
        $fm2 = \Yii::$app->basePath . '/web/' . $this->imgdir . $filename;
        unlink($fm2);
    }
}
