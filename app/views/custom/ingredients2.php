<?php

use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;
use app\models\AddToCartForm;


$asset = \app\assets\AppAsset::register($this);
$page = Page::get('page-ingridients');

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Выбор категории', 'url' => ['custom/index']];
$this->params['breadcrumbs'][] = ['label' => 'Выбор основы'];
$this->params['breadcrumbs'][] = $page->title;



?>

 <h1>  <?= $page->seo('h1', $page->title) ?> </h1>
 
 <?php if(Yii::$app->request->get(AddToCartForm::SUCCESS_VAR)) : ?>
                    <h4 class="text-success"><i class="glyphicon glyphicon-ok"></i> Товар добавлен в корзину</h4>
 <?php else : ?>  
    
    
    <!-- Вывод композитного товара -->                
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <div class="row">
              <div class="col-lg-12  col-md-12">
                   <div align = 'center'>
                    <h4><?=$baseItem->title?></h4>
                    <?= Html::img($baseItem->image,[
                                            'alt' =>$baseItem->title,
                                            'class' => 'img-responsive center-block img-thumbnail',
                                            'title' => $baseItem->description,
                                            'data-toggle'=>'tooltip',
                                            ]) ?>
                    
                    <span class="price"> <?=$baseItem->price ?> грн.</span> 
                   
                    </div>
                
               
              </div>
            </div>
        </div>    
            <div class="col-lg-9 col-md-9">
                <div class="row"  id="ingridients">
                      
                        <?php foreach($compositeGoods->getIngridients() as $slug) : ?>
                            <div class="col-md-2"> 
                               
                                <?php $item  =   Catalog::get( $slug ); ?>
                                        <?= Html::img($item->image,[
                                                        'alt' =>$item->title,
                                                        'class' => 'img-rounded img-responsive',
                                                        
                                                        ]) ?>
                                <div class="info-grid">
                                 <?= $item->title ?><br/>
                                 <span class="label label-warning"><?= $item->price ?>грн.</span>
                                </div>
                            </div>       
                        <?php endforeach; ?>
                    <?php   $dop = 6 - count($compositeGoods->getIngridients());for ($j = 0; $j < $dop; $j++ ):?>
                        
                        <div class="col-md-2"> 
                                                             
                                        <?= Html::img( $noingr->image,[
                                                        
                                                        'class' => 'img-rounded img-responsive',
                                                        
                                                        ]) ?>
                                <div class="info-grid">
                               
                                 
                                </div>
                            </div>       
                    
                    
                   <? endfor; ?>
                   
                   
                </div>    
            </div>
      </div> 
   
        
       <?php endif; ?> 
                    <hr>
    
          <p class="special-price"> 
                    <span class="price" id="summ">Общая цена <?= $summ ?> грн.</span> 
                </p>
                 <br>  <br> 
          
           <?= Html::a('Очистить', ['/custom/clear'], ['class'=>'btn btn-primary']) ?>
            <?= Html::a('Добавить в корзину', ['/custom/shop-cart-add'], ['class'=>'btn btn-success']) ?>           
                    
    <div class="row">   
        <div class="col-main col-sm-12  wow">    
            
            <ul class="products-grid">
           
                <?php   foreach ($ingridients as $ingridient) : ?>
               
                <li class="item col-lg-3 col-md-3 col-sm-6 col-xs-6">
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
  </div>                
                
        
           
        
     


