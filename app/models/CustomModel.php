<?php

namespace app\models;

use yii\base\Model;
use yii\easyii\modules\catalog\api\Catalog;

class CustomModel{
  public $parentCategory;
  public   $categories = [];
 
  // return array objectCategories  for Chaild Categories
  public function getChaildCategories(){
    foreach(Catalog::tree() as $node)  self::getNodes($node);
      
      return $this->categories;
}
  private function getNodes($node){
      if ($node->slug == $this->parentCategory){
         if(!count($node->children)){      
                
                    } else {
                               foreach($node->children as $child) {
                                $this->categories[]=Catalog::cat($child->slug);
                                self::getNodes($child);
                               } 

                    }
     }
      
      
  }
}
