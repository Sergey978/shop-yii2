<?php

namespace app\models;

use yii\base\Model;
use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\catalog\api\ItemObject;

class CustomModel  {
  
 
  // return array   Child Categories as ObjectCategories
  public function getChaildCategories($slug){
      $_parentCategory =  Catalog::cat($slug);
      $_tree = $_lft = $_parentCategory->model->tree;
      $_level = $_parentCategory->model->depth + 1;
      $_lft = $_parentCategory->model->lft;
      $_rgt = $_parentCategory->model->rgt;
    
      $_categories = $_parentCategory->model->find()->
               where(['and',"tree=$_tree","depth=$_level",'status = 1',"lft >= $_lft","rgt <= $_rgt"])->
              OrderBy('lft')->all();
             
      
            foreach ($_categories as $category){
                $categories[] =  Catalog::cat($category->slug);
            }

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
                  where(['category_id'=>$category->model->category_id])->all();
         
     }
    }
     
          
      
      return $items;
  }              
}
