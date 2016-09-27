<?php
use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\file\api\File;
use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;
use app\models\CustomModel;
use yii\widgets\LinkPager;
use app\models\AddToCartForm;


$page = Page::get('page-grid');

$this->params['breadcrumbs'][] = ['label' => 'Готовые средства', 'url' => ['/grid/index']];
$this->params['breadcrumbs'][] = $cat->model->title;
$model = new CustomModel(); 
?>
<section class="main-container col2-left-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-9 col-sm-push-3 wow">
          <div class="category-title">
            <h1><?=$cat->title?></h1>
          </div>
          
          <div class="category-products">
            <div class="toolbar">
                <?=Yii::$app->params['msg']?>
                <?php if (Yii::$app->session->hasFlash('success')) : ?>
                    <h4 class="text-success"><i class="glyphicon glyphicon-ok"></i> Товар добавлен в корзину</h4>
                <? endif;?>
        
                    <div class="pager">
                        <div class="pages">
                         <? if ($pages->totalCount > $pages->pageSize ):?>
                            <label>Страницы:</label> 
                        <? endif;?>    
                            <?   echo LinkPager::widget([
                                           'pagination' => $pages,
                                           'registerLinkTags' => true,

                                       ]);
                            ?>
                        </div>
                    </div>
            </div>
            <ul class="products-grid">
        
                <? foreach($items as $item):?>
                    <? $goods = Catalog::get($item['slug']);?> 
                    <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                      <div class="col-item">

                        <div class="images-container"> 
                            <a class="product-image" title="<?=$goods->title?>" href="product_detail.html"> 
                                <img src="<?=$goods->image?>" class="img-responsive img-thumbnail" 
                                     alt="<?=$goods->title?>"> 
                            </a>
                          
                          
                             <div class="qv-button-container"> 
                              <div class="qv-e-button">

                               <?=  Html::a(  '<span><span>Quick View</span></span>',
                                   ['/shopcart/add-goods', 'id' => $goods->id]);?> 

                              </div> 
                         </div>
                            
                            
                        </div>
                        <div class="info">
                          <div class="info-inner">
                            <div class="item-title"> <a title=" <?=$goods->title?>" href="/shop/view/<?=$goods->slug?>"> <?=$goods->title?> </a> </div>
                            <!--item-title-->
                            <div class="item-content">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div style="width:60%" class="rating"></div>
                                </div>
                              </div>
                              <div class="price-box">
                                <p class="special-price"> <span class="price"> <?=$goods->price.' грн.'?> </span> </p>
                                
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
                    
                 <? endforeach; ?>
              
          
               
              
           
             
            </ul>
          </div>
        </section>
        <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow">
          <div class="side-nav-categories">
            <div class="block-title"> Готовые средства </div>
            <!--block-title--> 
            <!-- BEGIN BOX-CATEGORY -->
            <div class="box-content box-category">
               
                <? $categories = $model->getChaildCategories('gotovaya-produkciya'); ?>
                 
              <ul>
                <? foreach ($categories as $category): ?>  
                <li> <a  href="/grid/category/<?=$category->slug ?>"><?=$category->title?></a> <span class="subDropdown minus"></span>
                  <? $subcategories = $model->getChaildCategories($category->slug);?>  
                  <ul class="level0_415" style="display:block">
                        <? foreach ($subcategories as $subcategory): ?>
                            <li> <a href="/grid/category/<?=$subcategory->slug?>">
                            <?=$subcategory->title?></a> 
                               
                            </li>
                        <? endforeach;     ?>
                 
                  </ul>
                  <!--level0--> 
                </li>
                <? endforeach;     ?>
                
                <li class="last"> <a href="/custom">Создать средство</a> </li>
                <!--level 0-->
              </ul>
            </div>
            <!--box-content box-category--> 
          </div>
        
          
       
    
     
         </aside>
      </div>
    </div>
  </section>

<?= $cat->seo('description'); ?>
           
  