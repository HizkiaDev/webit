<?php

namespace app\controllers;

use app\models\Blog;
use app\models\BlogKomentar;
use yii\web\NotFoundHttpException;
use yii\data\Pagination;

class BlogController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'main3';

        $query = Blog::find()->where(['dipublikasi' => 1]);

        // get the total number of articles (but do not fetch the article data yet)
        $count = $query->count();

        // create a pagination object with the total count
        $pagination = new Pagination(['totalCount' => $count]);
        $pagination->pageSize = 9;

        // limit the query using the pagination and retrieve the articles
        $blogs = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        
        return $this->render('index', [
                'blogs' => $blogs,
                'pagination' => $pagination,
        ]);
    }

    public function actionView($id)
    {
        $this->layout = 'main3';
        $model = $this->findModel($id);
        $komentarSet = $this->findKomentar($id);
        return $this->render('view', [
            'model' => $model,
            'komentar' => $komentarSet
        ]);


    }

    protected function findModel($id)
    {
        if (($model = Blog::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findKomentar($id_blog)
    {
        $komentarSet = BlogKomentar::find()
            ->where("((created_at > (now() - INTERVAL 30 MINUTE) OR terperiksa = 1)  AND id_blog = " . $id_blog . " )")
            ->all();
        
        return $komentarSet;
    }

}