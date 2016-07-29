<?php

namespace app\controllers;

use app\models\GadgetsFilterForm;
use Yii;
use app\models\AddToCartForm;
use yii\easyii\modules\catalog\api\Catalog;
use yii\web\NotFoundHttpException;
use app\models\CustomModel;
use app\models\CompositeGoods;
use yii\easyii\modules\shopcart\api\Shopcart;

class CustomController extends \yii\web\Controller
{ 
    
    
    
    public function actionIndex()
    {
       
       
       $model = new CustomModel;
       
      $compositeGoods = CompositeGoods::getInstance();
      $compositeGoods->clear();
       
       $categories = $model->getChaildCategories(Yii::$app->params['category']);
      
        return $this->render('index',['categories'=>$categories] );
    }

   
    
    public function actionCat($slug)
    {
        $model = new CustomModel;
        $cat = Catalog::cat($slug);
        
        $categories = $model->getChaildCategories($slug);
        $items = $model->getItems($categories);
        return $this->render('cat',['cat' => $cat, 'items'=>$items, 'categories'=>$categories] );

        
    }
    
    public function actionIngridients($slug){
        $model =  new CustomModel;
        $baseItem =  Catalog::get( $slug );
        $ingridients = $model->getIngridients();
        $compositeGoods = CompositeGoods::getInstance();
        $compositeGoods->setBaseItem($slug);
        
        return $this->render('ingridients',['baseItem'=>$baseItem, 
            'compositeGoods'=>$compositeGoods,
            'ingridients'=>$ingridients] );
    }

    public function actionMove($slug){
        $compositeGoods = CompositeGoods::getInstance();
        $compositeGoods->move($slug);
        $baseItem = $compositeGoods->getBaseItem();
        return $this->redirect('/custom/ingridients/'.$baseItem);

        
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
    
    
    public function actionClear(){
        $compositeGoods = CompositeGoods::getInstance();
        $item = Catalog::get($compositeGoods->getBaseItem());
        
        if(!$item){
            throw new NotFoundHttpException('Item not found.');
        }
        
        $compositeGoods->clear();
        
        return $this->redirect('/custom/ingridients/'.$item->slug);
        
    }
    
    public function actionShopCartAdd(){
         $compositeGoods = CompositeGoods::getInstance();
         $item = Catalog::get($compositeGoods->getBaseItem());
         $ingridients = implode ('|',$compositeGoods->getIngridients());
         
         $form = new AddToCartForm();
         $success = 0;
        
        $response = Shopcart::add($item->id, 1, $ingridients);
        $success = $response['result'] == 'success' ? 1 : 0;
      

        return $this->redirect(Yii::$app->request->referrer.'?'.AddToCartForm::SUCCESS_VAR.'='.$success);
    }
}
