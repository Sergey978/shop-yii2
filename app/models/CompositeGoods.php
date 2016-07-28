<?php
namespace app\models;

use \Yii;


class CompositeGoods{
    private  $baseItem;
    private  $ingridients = [];
    private static $session ;
    private static $_instance = null;
    
   
    private function __construct() {
        if (self::$session->isActive){
            $baseItem = $session->get('baseItem');
            $ingridients = $session->get('ingridients');
        }
        self::$session = Yii::$app->session;
    }
    protected function __clone() {
   
    }
    
    static public function getInstance() {
    if(is_null(self::$_instance)){
            self::$_instance = new self();
        }
           
            return self::$_instance;
    }
    
    public function setBaseItem($slug){
        $this->baseItem = $slug;
        self::$session->set('baseItem', $this->baseItem);
    }
    
    
    public function getBaseItem(){
      if (self::$session->has('baseItem')){
          $this->baseItem =  self::$session->get('baseItem');
      } 
        return  $this->baseItem ;
    }
    
    
    
    public function move($slug){
        if (self::$session->has('ingridients')){
          $this->ingridients = self::$session->get('ingridients');
      } 
        
        
        if (count($this->ingridients) > 1 && 
                ($i = array_search($slug, $this->ingridients)) !== false ){
            unset($this->ingridients[$i]);
            $result =  -1;
        }
        else if (count($this->ingridients) < 6 ){
            $this->ingridients[] = $slug;
            $result = 1;
        }
        self::$session->set('ingridients', $this->ingridients);
        
        return result;
        
    }
     
    
    
     public function getIngridients(){
         if (self::$session->has('ingridients')){
          $this->ingridients = self::$session->get('ingridients');
      }
      
      return $this->ingridients;
     }
       
}
