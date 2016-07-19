<?php

namespace app\models;

use yii\base\Model;
use yii\easyii\modules\catalog\api\Catalog;

class CustomModel{
  public $parentCategory;
  public $categories = [];
 
  // return array objectCategories  for Chaild Categories
  public function getChaildCategories(){
    foreach(Catalog::tree() as $node)  self::getChilds($node);
      
      return $this->categories;
}
  
  
  
  private function getChilds($node){
      $currentNodeSlug = $node->slug;
       
             if(!count($node->children)){      
                
                    } else {
                               foreach($node->children as $child) {
                                   if ($currentNodeSlug ==$this->parentCategory){
                                       $this->categories[]=Catalog::cat($child->slug);
                                   }
                                   
                                self::getChilds($child);
                               } 

                    }
    
           
  }
}
