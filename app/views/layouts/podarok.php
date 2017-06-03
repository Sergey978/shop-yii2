<?
use yii\helpers\Url;
use yii\helpers\Html;
use yii\easyii\modules\catalog\api\Catalog;

?>


<div class="nav-add">
    
    
                        <? $podarkiCategory = 
                                Catalog::cat('podarochnaya-kategoriya')->model->category_id;?>
                     <?=$podarkiCategory; ?>
                     <?$podarki = Catalog::items( ['where'=>['category_id' => 38]]); ?>
                     <?
                        foreach ($podarki as $podarok){
                          echo $podarok->model->item_id.'<br>';
                        }

                     
                     ?>
                     
                      <? $item1 = Catalog::get('podarok-1');?>
                     <? if ($item1): ?> 
                    <div class="push_item1">
                      <div class="push_img"> 
                          <a href="/shop/view/<?= $item1->slug?>">
                                <img  alt="<?= $item1->title?> " 
                                      src="<?= $item1->image?>"
                                      width="254px" 
                                      height="150px">
                          </a> 
                      </div>
                    </div>
                     <?  endif;?>
                      
                    <? $item2 = Catalog::get('podarok-2');?>  
                    <? if ($item2): ?> 
                    <div class="push_item1">
                      <div class="push_img"> 
                           <a href="/shop/view/<?= $item2->slug?>">
                                <img  alt="<?= $item2->title?> " 
                                      src="<?= $item2->image?>"
                                      width="254px" 
                                      height="150px">
                          </a> 
                      </div>
                    </div>
                    <?  endif;?>  
                      
                   <? $item3 = Catalog::get('podarok-3');?>  
                    <? if ($item3): ?> 
                    <div class="push_item1">
                      <div class="push_img"> 
                           <a href="/shop/view/<?= $item3->slug?>">
                                <img  alt="<?= $item3->title?> " 
                                      src="<?= $item3->image?>"
                                      width="254px" 
                                      height="150px">
                          </a> 
                      </div>
                    </div>
                    <?  endif;?>  
                    <br class="clear">
                  </div>
                </div>
                <!--nav-block nav-block-center-->
               
                <? $item4 = Catalog::get('podarok-4');?>  
                    <? if ($item4): ?> 
                    <div class="nav-block nav-block-right std grid12-4">
                     <p>
                      
                           <a href="/shop/view/<?=$item4->slug?>">
                                <img  class="fade-on-hover"
                                      alt="<?= $item4->title?> " 
                                      src="<?= $item4->image?>" >
                                      
                          </a> 
                      
                     </p>   
                    </div>
                    <?  endif;?>  