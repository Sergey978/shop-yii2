<?php
namespace app\models;


class CompositeGoods{
    public $baseItem;
    public $ingridients = [];
    
    function __construct($baseItem = null) {
        $this->baseItem = $baseItem;
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
    
}
