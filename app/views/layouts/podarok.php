<?
use yii\helpers\Url;
use yii\helpers\Html;
use yii\easyii\modules\catalog\api\Catalog;

?>


<div class="nav-add">
    
    
              <? $podarkiCategory = 
                           Catalog::cat('podarochnaya-kategoriya')->model->category_id;?>
                     
              <? $podarki = Catalog::items( ['where'=>['category_id' => 38]]); ?>
    
                     <?  for ($i = 0; $i<3; $i++) : ?>
                        
                      <? $item = $podarki[$i];?>
                        <? if ($item): ?> 
                       <div class="push_item1">
                         <div class="push_img"> 
                             <a href="/shop/view/<?= $item->slug?>">
                                   <img  alt="<?= $item->title?> " 
                                         src="<?= $item->image?>"
                                         width="254px" 
                                         height="150px">
                             </a> 
                         </div>
                       </div>
                        <?  endif;?>
                     <? endfor;  ?>
                     
                     
                     
                   
                      
                   
                    <br class="clear">
                  </div>
                </div>
                <!--nav-block nav-block-center-->
               
                <? $item4 = $podarki[3];?>  
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