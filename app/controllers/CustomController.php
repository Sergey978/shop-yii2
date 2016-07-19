<?php

namespace app\controllers;

use app\models\GadgetsFilterForm;
use Yii;
use yii\easyii\modules\catalog\api\Catalog;
use yii\web\NotFoundHttpException;

use app\models\CustomModel;

class CustomController extends \yii\web\Controller
{ 
    
    
    
    public function actionIndex()
    {
       
       
       $model = new CustomModel;
       $model->parentCategory ='category';
       $categories = $model->getChaildCategories();
      
        return $this->render('index',['categories'=>$categories] );
    }

   
    
    public function actionCat($slug)
    {
        $model = new CustomModel;
        $model->parentCategory = $slug;
        $categories = $model->getChaildCategories();
        
        return $this->render('cat',['categories'=>$categories] );

        
    }

    public function actionSearch($text)
    {
        $text = filter_var($text, FILTER_SANITIZE_STRING);

        return $this->render('search', [
            'text' => $text,
            'items' => Catalog::items([
                'where' => ['or', ['like', 'title', $text], ['like', 'description', $text]],
            ])
        ]);
    }

    public function actionView($slug)
    {
        $item = Catalog::get($slug);
        if(!$item){
            throw new NotFoundHttpException('Item not found.');
        }

        return $this->render('view', [
            'item' => $item,
            'addToCartForm' => new \app\models\AddToCartForm()
        ]);
    }
}
