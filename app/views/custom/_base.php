<?php 
use yii\helpers\Html; 
use yii\easyii\modules\catalog\api\Catalog;
?>


        
         <div class="col-md-3">
        
             
           <?=  Html::a(Html::img($item->image,[
                                    'alt' =>$category->title,
                                    'class' => 'img-rounded',
                                    'title' => $item->description,
                                    'width'=>'200',
                                    'height'=>'auto',
                                   'data-toggle'=>'tooltip',
                                    ]),
                   ['/custom/ingridients/', 'slug' => $item->slug]);?>
        
             
              <h4 ><?= $item->title ?></h4>
            
          </div>
   
                   
                  
    