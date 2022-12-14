<?php

namespace app\controllers\admin;

use app\models\Thelink;
use app\models\ThelinkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ThelinkController implements the CRUD actions for Thelink model.
 */
class ThelinkController extends ControllerAdmin
{
    /**
     * @inheritDoc
     */
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
     * Lists all Thelink models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ThelinkSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Thelink model.
     * @param int $id_link Id Link
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_link)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_link),
        ]);
    }

    /**
     * Creates a new Thelink model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Thelink();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_link' => $model->id_link]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Thelink model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_link Id Link
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_link)
    {
        $model = $this->findModel($id_link);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_link' => $model->id_link]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Thelink model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_link Id Link
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_link)
    {
        $this->findModel($id_link)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Thelink model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_link Id Link
     * @return Thelink the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_link)
    {
        if (($model = Thelink::findOne(['id_link' => $id_link])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
