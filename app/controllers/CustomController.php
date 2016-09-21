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
        $summ = $compositeGoods->getSumm();
        
        return $this->render('ingredients2',['baseItem'=>$baseItem, 
            'compositeGoods'=>$compositeGoods,
            'ingridients'=>$ingridients,
            'summ' => $summ,
            'noingr' => Catalog::get('no-ingredient')]);
    }

    public function actionMove($slug){
        $compositeGoods = CompositeGoods::getInstance();
        $compositeGoods->move($slug);
        $ingridients = $compositeGoods->getIngridients();
        $summ = $compositeGoods->getSumm();
        
        foreach ($ingridients as $slug){
            $selectedIngridients[] = Catalog::get($slug);
        }
        $priceBaseItem = Catalog::get($compositeGoods->getBaseItem())->model->price;
        
        /*
         * Для отображения пустых ячеек ингредиентов , создать пустой товар
         * с меткой slug 'no-ingredient' картинка - знак вопроса
         */
        
        
        if (Yii::$app->request->isAjax) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return ['ingridients' =>$selectedIngridients,
                    'summ' => $summ,
                    'noingr' => Catalog::get('no-ingredient') ];
        }

        
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

   
    
    
    public function actionClear(){
        $compositeGoods = CompositeGoods::getInstance();
        $item = Catalog::get($compositeGoods->getBaseItem());
        
        if(!$item){
            throw new NotFoundHttpException('Item not found.');
        }
        
        $compositeGoods->clear();
        
        return $this->redirect('/custom/ingridients/'.$item->slug);
        
    }
    //добавляет составной товар в корзину
    public function actionShopCartAdd(){
         $compositeGoods = CompositeGoods::getInstance();
         $item = Catalog::get($compositeGoods->getBaseItem());
         $ingridients = implode ('|',$compositeGoods->getIngridients());
         
         $success = 0;
        
        $response = Shopcart::add($item->id, 1, $ingridients);
        $success = $response['result'] == 'success' ? 1 : 0;
      

        return $this->redirect(Yii::$app->request->referrer.'?'.AddToCartForm::SUCCESS_VAR.'='.$success);
    }
}
