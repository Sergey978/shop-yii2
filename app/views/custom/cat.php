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
            /*
            foreach($categories as $category){
                
                     echo $category->title."  ".$category->model->category_id.'<br>' ; 
                
                       
                     $goods =null;
                     
                     $goods = Catalog::items(['where'=>['category_id'=>9]]);
                    if(count($goods)) {
                        foreach($goods as $good) {
                              
                                 echo  Html::a($good->title, ['shop/view', 'slug' => $good->slug]).'<br>';
                         }
                    }
                    else {
                        echo "пусто";
                    }
                       
                    
                    $goods =null;
                     
                     $goods = Catalog::items(['where'=>['category_id'=>12]]);
                    if(count($goods)) {
                        foreach($goods as $good) {
                              
                                 echo  Html::a($good->title, ['shop/view', 'slug' => $good->slug]).'<br>';
                         }
                    }
                    else {
                        echo "пусто";
                    }
              
         
                
                
            }  */
               // echo'test';
           // print_r($items);
          $i=0;
            foreach ($categories as $category){
               echo $category->title.'<br>';
                foreach ($items[$i] as $item){
                 echo $item->title.'<br>';
           } 
            $i++;
            }
                
                
               
              ?>
              
                 
           
               
              
            
        
            
            
       
           
    </div>
   
</div>



