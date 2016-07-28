<?php

use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;




$page = Page::get('page-ingridients');

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Выбор категории', 'url' => ['custom/index']];
$this->params['breadcrumbs'][] = ['label' => 'Выбор основы'];
$this->params['breadcrumbs'][] = $page->title;



?>

 <h1>  <?= $page->seo('h1', $page->title) ?> </h1>
    <div class="row">  
     
        <div class="col-md-8">    
          <div class="row">
            <?php   foreach ($ingridients as $ingridient) : ?>
            
           
                   <div class="ingridient col-sm-6 col-md-4 col-lg-3 text-center"> 
                         <h4><?=$ingridient->title?></h4>
                            <?= Html::a(Html::img($ingridient->image,[
                                           'alt' =>$ingridient->title,
                                           'class' => 'img-rounded',
                                           'width'=>'140',
                                           'height'=>'auto',

                                           ]), 
                                            ['/custom/move', 'slug' => $ingridient->slug]);

                             ?>
               
             
             
             
            
              <p><?= 'Цена '. $ingridient->price?></p>
              
             </div>
             
               
               
             
          
         
         <?php endforeach; ?>
       </div>  
      </div>
        
      <!-- echo composite goods -->  
         <div class="col-md-4">
             <div align = 'center'>
                 <h4><?=$baseItem->title?></h4>
        <?= Html::img($baseItem->image,[
                                    'alt' =>$baseItem->title,
                                    'class' => 'img-rounded',
                                    'title' => $baseItem->description,
                                    'width'=>'180',
                                    'height'=>'auto',
                                    'data-toggle'=>'tooltip',
                                    ]) ?> 
            </div>
        <h4>Ингридиенты</h4>
        <?php foreach($compositeGoods->getIngridients() as $slug) : ?>
        <?php $item =   Catalog::get( $slug ); ?>
        
        
            <p>
                <?= Html::img($item->thumb(50)) ?>
                <?= Html::a($item->title, ['/custom/move', 'slug' => $item->slug]) ?><br/>
                <span class="label label-warning"><?= $item->price ?>$</span>
            </p>
        <?php endforeach; ?>
        
          
           <?= Html::a('Очистить', ['/custom/clear'], ['class'=>'btn btn-primary']) ?>
         </div>
        
   </div>         
    
                   
                
        
           
        
     

