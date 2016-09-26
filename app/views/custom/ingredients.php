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

 
 
 <?php if(Yii::$app->request->get(AddToCartForm::SUCCESS_VAR)) : ?>
                    <h4 class="text-success"><i class="glyphicon glyphicon-ok"></i> Товар добавлен в корзину</h4>
 <?php else : ?>  
    <h1>  <?= $page->seo('h1', $page->title) ?> </h1>
    
    <!-- Вывод композитного товара -->                
    <div class="panel panel-default">
    <div class="row">
        <div class="col-lg-3 col-md-3  col-sm-3 col-xs-3  ">
            <div class="row">
              <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                   <div align = 'center'>
                    
                    <?= Html::img($baseItem->image,[
                                            'alt' =>$baseItem->title,
                                            'class' => 'img-responsive center-block img-thumbnail',
                                            'title' => $baseItem->description,
                                            'data-toggle'=>'tooltip',
                                            ]) ?>
                    
                       <p class="special-price"> <span class="price"> <?=$baseItem->price ?> грн.</span></p> 
                   
                    </div>
                
               
              </div>
            </div>
        </div>    
            <div class="col-lg-9 col-md-9  col-sm-9 col-xs-9">
                <div class="row">
                    <div class="sel-ingr">
                    <h4><?=$baseItem->title?></h4>
                    <span>Выбранные ингредиенты:</span>
                    </div>
                      
                       <div class="products-grid">
                           
                          <div class="col-md-1 col-sm-1 hidden-xs">
                              <br><br>
                              <i class="icon-plus custom"></i>
                          </div>
                        <section id="ingredients">
                        <?php foreach($compositeGoods->getIngridients() as $slug) : ?>
                            
                            <div class="col-item col-md-2 col-sm-2 col-xs-2">
                                <div class="images-container" >
                                    <div class="ingridient">
                                            <?php $item  =   Catalog::get( $slug ); ?>
                                                     <?= Html::a(Html::img($item->image,[
                                                    'alt' =>$item->title,
                                                    'class' => 'product-image center-block img-thumbnail',

                                                    ]), 
                                                     ['/custom/move', 'slug' => $item->slug]);

                                                     ?>

                                          <div class="qv-button-container-mn"> 
                                            <div class="qv-e-button">
                                             <?=  Html::a(  '<span><span>Quick View</span></span>',
                                              ['/custom/move/', 'slug' => $item->slug]);?> 
                                            </div> 
                                          </div>  
                                    
                                </div> 
                                
                                 <div class="info-grid">
                                     <?= $item->title ?><br/>
                                     <span class="label label-warning"><?= $item->price ?>грн.</span>
                                 </div>
                                
                                </div>
                            </div>     
                                    
                             
                        <?php endforeach; ?>
        <!-- Вывод знаков вопроса в пустых ячейках -->              
                    <?php $dop = 5 - count($compositeGoods->getIngridients());for ($j = 0; $j < $dop; $j++ ):?>
                        <div class="col-md-2 col-sm-2 col-xs-2">             
                                        <?= Html::img( $noingr->image,[
                                                        'class' => 'img-rounded img-responsive',
                                                        ]) ?>
                                <div class="info-grid">
                                </div>
                            </div>
                    <? endfor; ?>
                    </section> 
                    </div>
                    
                </div>  
                <hr class="custom-price">
                
                 <p class="custom-price"> 
                    Итого:<span class="price" id="summ"><?= $summ ?> грн.</span> 
                     <?= Html::a('Добавить в корзину', ['/custom/shop-cart-add'], ['class'=>'btn btn-success']) ?>    
                </p>
               
            </div>
      </div> 
   
    </div>    
       <?php endif; ?> 
                  
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
                
        
           
        
     


