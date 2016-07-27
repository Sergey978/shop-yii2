<?php
namespace app\models;


class CompositeGoods{
    public $baseItem;
    public $ingridients = [];
    private static $_instance = null;
    
   
    private function __construct() {
        self::$_instance = Yii::$app->session->get('compositeGoods');
    }
    protected function __clone() {
   
    }
    
    static public function getInstance() {
    if(is_null(self::$_instance)){
            self::$_instance = new self();
        }
            
             Yii::$app->session->get('compositeGoods',$compositeGoods);
            return self::$_instance;
    }
    
    public function setBaseItem($slug){
        $this->baseItem = $slug;
    }
    
    
    public function getBaseItem(){
      return  $this->baseItem ;
    }
    
    
    public function addIngridient($ingreidientSlug){
        if (count($this->ingridients) < 6 ){
            $this->ingridients[] = $ingreidientSlug;
            return true;
        }
        else{
            return false;
        }
    }
    
    
    public function removeIngridient($ingreidientSlug){
        if (count($this->ingridients) > 1 ){
            while (($i = array_search($ingreidientSlug, $this->ingridients)) !== false) {
            unset($array[$i]);
            } 
            
            return true;
        }
        else{
            return false;
        }
    }
    
    public function move($slug){
        if (count($this->ingridients) > 1 && 
                ($i = array_search($slug, $this->ingridients)) !== false ){
            unset($this->ingridients[$i]);
            return -1;
        }
        else if (count($this->ingridients) < 6 ){
            $this->ingridients[] = $slug;
            return 1;
        }
    }
    
}
