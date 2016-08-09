<?php 
use yii\helpers\Html; 
use yii\easyii\modules\catalog\api\Catalog;
?>


        
          
        <li class="item col-lg-3 col-md-4 col-sm-4 col-xs-6">
                <div class="col-item">
               
                  <div class="images-container"> 
                     
                    
                      
                      <?=  Html::a(Html::img($item->image,[
                                    'alt' =>$item->title,
                                    'class' => 'img-responsive center-block img-thumbnail',
                                    'title' => $item->description,
                                    'overflow'=>'visible',
                                    'data-toggle'=>'tooltip',
                                    ]),
                   ['/custom/ingridients/', 'slug' => $item->slug]);?>
                    
                      
                      
                     
                   <div class="qv-button-container"> 
                        <div class="qv-e-button">
                            
                         <?=  Html::a(  '<span><span>Quick View</span></span>',
                             ['/custom/ingridients/', 'slug' => $item->slug]);?> 
                            
                        </div> 
                   </div>
                  
                  </div>
                
                  <div class="info">
                    <div class="info-inner">
                      <div class="h5"> 
                            <?= $item->title ?> 
                      </div>
                      <!--item-title-->
                      <div class="item-content">
                        <div class="ratings">
                          
                        </div>
                        <div class="price-box">
                          <p class="special-price"> <span class="price"> <?=$item->price ?> грн.</span> </p>
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
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
                
                
        </li>
    