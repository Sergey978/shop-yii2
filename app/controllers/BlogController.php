<?php

namespace app\controllers;

use yii\easyii\modules\article\api\Article;

class BlogController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $cat = Article::cat('blog');
        
        if(!$cat){
            throw new \yii\web\NotFoundHttpException('Article category not found.');
        }
        
        return $this->render('index',[
            'cat' => $cat,
            'items' => $cat->items(['tags' => $tag, 'pagination' => ['pageSize' => 10]])
        ]);
    }
    
    
    
    public function actionView($slug)
    {
        $article = Article::get($slug);
        if(!$article){
            throw new \yii\web\NotFoundHttpException('Article not found.');
        }

        return $this->render('view', [
            'article' => $article
        ]);
    }

}
