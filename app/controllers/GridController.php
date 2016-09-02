<?php

namespace app\controllers;

use app\models\GadgetsFilterForm;
use Yii;
use yii\easyii\modules\catalog\api\Catalog;
use yii\web\NotFoundHttpException;
use app\models\CustomModel;

class GridController extends \yii\web\Controller
{
    public function actionIndex(){
        $model = new CustomModel;
        
         $cat = Catalog::cat('gotovaya-produkciya');
         $result = $model->getChildItems('gotovaya-produkciya');
             
       
        
        return $this->render('index',[
           'items' => $result['items'],
           'pages' => $result['pages'],
           'cat' => $cat,]);
    }
    
    
    public function actionCategory($slug){
        $model = new CustomModel;
        $cat = Catalog::cat($slug);

        if(!$cat){
            throw new NotFoundHttpException('Shop category not found.');
        }
        
         $result = $model->getChildItems($cat->slug);
         
          return $this->render('index',[
            'items' => $result['items'],
              'pages'  => $result['pages'],
              'cat' => $cat,]);
    }

   
}


