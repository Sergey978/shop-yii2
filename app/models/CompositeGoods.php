<?php
namespace app\models;

use \Yii;
use \yii\easyii\modules\catalog\api\Catalog;

class CompositeGoods{
    private  $baseItem;
    private  $ingridients = [];
    private static $session ;
    private static $_instance = null;
    
   
    private function __construct() {
        if (self::$session->isActive){
            $this->baseItem = self::$session->get('baseItem');
            $this->ingridients = self::$session->get('ingridients');
        }
        self::$session = Yii::$app->session;
        self::$session->open();
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
        
        
        if (count($this->ingridients) > 0 && 
                ($i = array_search($slug, $this->ingridients)) !== false ){
            unset($this->ingridients[$i]);
            $result =  -1;
        }
        else if (count($this->ingridients) < 5 ){
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
     
     public  function clear(){
        self::$session->remove('baseItem');
        self::$session->remove('ingridients');   
        
     }
     
     public function getSumm(){
        $summ = 0;
         
        
        
        $baseItem = Catalog::get($this->getBaseItem());
        $ingridients = $this->getIngridients();
        $summ += $baseItem->price;
        
        if (count($ingridients) > 0){
            foreach ($ingridients as $ingridient){
                
                $summ += Catalog::get($ingridient)->price;
            }
        }
      return $summ;
     }
       
}
