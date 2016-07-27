<?php

namespace app\controllers;

use app\models\GadgetsFilterForm;
use Yii;
use yii\easyii\modules\catalog\api\Catalog;
use yii\web\NotFoundHttpException;
use app\models\CustomModel;
use app\models\CompositeGoods;

class CustomController extends \yii\web\Controller
{ 
    
    
    
    public function actionIndex()
    {
       
       
       $model = new CustomModel;
       
       $categories = $model->getChaildCategories(Yii::$app->params['category']);
      
        return $this->render('index',['categories'=>$categories] );
    }

   
    
    public function actionCat($slug)
    {
        $model = new CustomModel;
         
        $categories = $model->getChaildCategories($slug);
        $items = $model->getItems($categories);
        return $this->render('cat',['items'=>$items, 'categories'=>$categories] );

        
    }
    
    public function actionIngridients($slug){
        $model =  new CustomModel;
        $baseItem =  Catalog::get( $slug );
        $ingridients = $model->getIngridients();
        $compositeGoods = new CompositeGoods($slug);
        
        return $this->render('ingridients',['baseItem'=>$baseItem, 
            'compositeGoods'=>$compositeGoods,
            'ingridients'=>$ingridients] );
    }

    public function actionIngridientMove($slug){
        
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
