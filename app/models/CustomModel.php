<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\catalog\api\ItemObject;
use yii\db\Query;
use yii\data\Pagination;



class CustomModel  {
  
 
  // return array   Child Categories as ObjectCategories
  public function getChaildCategories($slug){
      $_parentCategory =  Catalog::cat($slug);
      $_tree  = $_parentCategory->model->tree;
      $_level = $_parentCategory->model->depth + 1;
      $_lft = $_parentCategory->model->lft;
      $_rgt = $_parentCategory->model->rgt;
    
      $categories = $_parentCategory->model->find()->
               where(['and',"tree=$_tree","depth=$_level",'status = 1',"lft >= $_lft","rgt <= $_rgt"])->
              OrderBy('lft')->all();
             
      
           
      return $categories;
}


  
  
  
  //return arrays of objects items in categories
  public function getItems($categories){
     $items =[];
     $item =  Catalog::get( 0 );
     $i=0;
    if(count($categories)){
        foreach ($categories as $category){
        $items[$category->slug] =  $item->model->find()->
                  where(['category_id'=>$category->category_id])->all();
            
         
            // It does not work because of the cache
           //   $items[$category->slug] = Catalog::items( ['where' =>['category_id'=>
         //           $category->model->category_id]] );
         
     }
    }
     
        
      return $items;
  }  
  
  public  function getIngridients(){
      
      $categoryId = Catalog::cat(Yii::$app->params['ingridients'])->model->category_id;
      $ingridients = Catalog::items(  ['where' =>['category_id'=>$categoryId]]);
                 
      
      return $ingridients;
  }
  
  public  function getItemsInTree($slug){
      $_idTree = (new \yii\db\Query())
          ->select(['tree'])
          ->from('easyii_catalog_categories')
          ->where(['slug' => $slug])
          ->one();
      
     
      
      $items = (new \yii\db\Query())
              ->select('easyii_catalog_items.slug')
              ->from(['easyii_catalog_items'])
              ->innerJoin('easyii_catalog_categories',
                       'easyii_catalog_items.category_id = '
                      . 'easyii_catalog_categories.category_id AND easyii_catalog_categories.tree ='.$_idTree['tree'] )
              ->all();
      
      return $items;
  }
  //return array items in category
  public function getChildItems($slug){
      $_parentCategory =  Catalog::cat($slug);
      $_tree  = $_parentCategory->model->tree;
     
      $_lft = $_parentCategory->model->lft;
      $_rgt = $_parentCategory->model->rgt;
    
     
      
      // выполняем запрос
      $query  = (new \yii\db\Query())
              ->select('easyii_catalog_items.slug')
              ->from(['easyii_catalog_items'])
              ->innerJoin('easyii_catalog_categories',
                       'easyii_catalog_items.category_id = '
                      . 'easyii_catalog_categories.category_id '
                      . ' AND easyii_catalog_categories.lft >= '.$_lft
                      . ' AND easyii_catalog_categories.rgt <= '.$_rgt
                      . ' AND easyii_catalog_categories.tree = '.$_tree );
              
       // делаем копию выборки
      $countQuery = clone $query;
      // подключаем класс Pagination, выводим по 9 пунктов на страницу
      $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3]);
      $pages->pageSizeParam = false;
    
       // производим выборку элементов уже для конкретной страницы
        $items = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
            
        // Передаем данные в представление
        return  [
             'items' => $items,
             'pages' => $pages,
        ];
  }
  
}
