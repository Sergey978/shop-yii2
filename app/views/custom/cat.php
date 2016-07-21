<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\easyii\modules\catalog\api\Catalog;

//$this->title = $cat->seo('title', $cat->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Shop', 'url' => ['shop/index']];
$this->params['breadcrumbs'][] = $cat->model->title;
?>
<h1></h1>
<br/>

<div class="row">
    <div class="col-md-8">
   
        
        
        
            <br/>
            <?php
            if(count($categories)){
                 foreach ($categories as $category){
                        echo $category->title.'<br>';
                        foreach ($items[$category->slug] as $item){
                        echo $item->title.'<br>';
                } 
            
                }
            }
            else echo "Пусто здесь"
           
                
                
               
              ?>
              
                 
           
               
              
            
        
            
            
       
           
    </div>
   
</div>



