<?php

use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;
use app\models\AddToCartForm;



$page = Page::get('page-ingridients');

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Выбор категории', 'url' => ['custom/index']];
$this->params['breadcrumbs'][] = ['label' => 'Выбор основы'];
$this->params['breadcrumbs'][] = $page->title;



?>

 <h1>  <?= $page->seo('h1', $page->title) ?> </h1>
    <div class="row">  
     
        <div class="col-main col-sm-9 col-sm-push-3 wow">    
            
            <ul class="products-grid">
           
                <?php   foreach ($ingridients as $ingridient) : ?>
               
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                  <div class="col-item" >

                     <div class="images-container" > 
                        <div class="ingridient">
                             <?= Html::a(Html::img($ingridient->image,[
                                            'alt' =>$ingridient->title,
                                            'class' => 'product-image center-block img-thumbnail',
                                            'title' => $ingridient->description,
                                            'data-toggle'=>'tooltip',
                                            'data-placement' => 'auto'
                                 
                                            ]), 
                                             ['/custom/move', 'slug' => $ingridient->slug]);

                              ?>

                            <div class="qv-button-container"> 
                                  <div class="qv-e-button">
                                   <?=  Html::a(  '<span><span>Quick View</span></span>',
                             ['/custom/move/', 'slug' => $ingridient->slug]);?> 
                                  </div> 
                             </div>
                        </div>        
                     </div>
                 


                   <div class="info">
                     <div class="info-inner">
                       <div class="h5"> 
                             <?= $ingridient->title ?> 
                       </div>
                       <!--item-title-->
                       <div class="item-content">
                         <div class="ratings"> 
                         </div>
                         <div class="price-box">
                           <p class="special-price"> <span class="price"> <?=$ingridient->price ?> грн.</span> </p>
                           <p class="old-price"> <span class="price-sep">-</span> 
                               <span class="price"> 
                                     <? /*$ingridient->oldPrice */?>
                               </span> </p>
                         </div>
                       </div>
                       <!--item-content--> 
                     </div>
                     <!--info-inner--> 

                     <!--actions-->


                   </div>
                 </div>


                 </li>
         
                <?php endforeach; ?>
        
            </ul>
      
         </div>
      <!-- echo composite goods -->  
         <div class="sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow">
             <div align = 'center'>
                 
        <?php if(Yii::$app->request->get(AddToCartForm::SUCCESS_VAR)) : ?>
                    <h4 class="text-success"><i class="glyphicon glyphicon-ok"></i> Товар добавлен в корзину</h4>
                <?php else : ?>      
                 <h4><?=$baseItem->title?></h4>
                <?= Html::img($baseItem->image,[
                                            'alt' =>$baseItem->title,
                                            'class' => 'product-image center-block img-thumbnail',
                                            'title' => $baseItem->description,
                                            'data-toggle'=>'tooltip',
                                            ]) ?>
                <p class="special-price"> 
                    <span class="price"> <?=$baseItem->price ?> грн.</span> 
                </p>
            </div>
             
             
                    <h4>Ингредиенты</h4>
            <div id="ingridients">        
                    <?php foreach($compositeGoods->getIngridients() as $slug) : ?>
                    <?php $item  =   Catalog::get( $slug ); ?>

                        <p>
                            <?= Html::img($item->image,[
                                            'alt' =>$item->title,
                                            'class' => 'img-rounded',
                                            'width' => 60,
                                            'height' => 'auto',
                                
                                            ]) ?> 
                            
                            
                            
                            
                            <?= $item->title ?><br/>
                            <span class="label label-warning"><?= $item->price ?>грн.</span>
                        </p>
                    <?php endforeach; ?>
                     
                
            
            </div>
                    
                <p class="special-price"> 
                    <span class="price" id="summ">Общая цена <?= $summ ?> грн.</span> 
                </p>
                 <br>  <br> 
          
           <?= Html::a('Очистить', ['/custom/clear'], ['class'=>'btn btn-primary']) ?>
            <?= Html::a('Добавить в корзину', ['/custom/shop-cart-add'], ['class'=>'btn btn-success']) ?>
         <?php endif; ?>    
         </div>
        
   </div>         
    
                   
                
        
           
        
     

