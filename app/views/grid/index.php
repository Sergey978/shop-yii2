<?php
use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\file\api\File;
use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;
use app\models\CustomModel;



$this->params['breadcrumbs'][] = $page->model->title;
$model = new CustomModel(); 
?>
<section class="main-container col2-left-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-9 col-sm-push-3 wow">
          <div class="category-title">
            <h1>Tops &amp; Tees</h1>
          </div>
          <!-- category banner -->
          <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div style="opacity: 1; display: block;" class="slider-items slider-width-col1 owl-carousel owl-theme"> 
                  
                  <!-- Item -->
                  <div class="owl-wrapper-outer"><div style="width: 3392px; left: 0px; display: block;" class="owl-wrapper"><div style="width: 848px;" class="owl-item"><div class="item"> <a href="#"><img alt="category-banner" src="images/category-banner-img.jpg"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <h2 class="cat-heading">New Fashion 2015</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam arcu.</p>
                    </div>
                  </div></div><div style="width: 848px;" class="owl-item"><div class="item"> <a href="#x"><img alt="category-banner" src="images/category-banner-img1.jpg"></a> </div></div></div></div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  
                  <!-- End Item --> 
                  
                <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><a class="flex-prev"></a></div><div class="owl-next"><a class="flex-next"></a></div></div></div></div>
              </div>
            </div>
          </div>
          <!-- category banner -->
          <div class="category-products">
            <div class="toolbar">
              
        
              <div class="pager">
                <div id="limiter">
                  <label>View: </label>
                  <ul>
                    <li><a href="#">15<span class="right-arrow"></span></a>
                      <ul>
                        <li><a href="#">20</a></li>
                        <li><a href="#">30</a></li>
                        <li><a href="#">35</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="pages">
                  <label>Page:</label>
                  <ul class="pagination">
                    <li><a href="#">«</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">»</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <ul class="products-grid">
        
                <? foreach($items as $item):?>
                    <? $good = Catalog::get($item['slug']);?> 
                    <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                      <div class="col-item">

                        <div class="images-container"> <a class="product-image" title="<?=$good->title?>" href="product_detail.html"> <img src="<?=$good->image?>" class="img-responsive" alt="a"> </a>
                          <div class="actions">
                            <div class="actions-inner">
                              <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                              <ul class="add-to-links">
                                <li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
                                <li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
                        </div>
                        <div class="info">
                          <div class="info-inner">
                            <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                            <!--item-title-->
                            <div class="item-content">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div style="width:60%" class="rating"></div>
                                </div>
                              </div>
                              <div class="price-box">
                                <p class="special-price"> <span class="price"> $45.00 </span> </p>
                                <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
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
                <li> <a  href="#"><?=$category->title?></a> <span class="subDropdown minus"></span>
                  <? $subcategories = $model->getChaildCategories($category->slug);?>  
                  <ul class="level0_415" style="display:block">
                        <? foreach ($subcategories as $subcategory): ?>
                            <li> <a href="grid/<?=$subcategory->slug?>">
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
        
          
       
    
     
          <div class="block block-banner"><a href="#"><img src="images/block-banner.png" alt="block-banner"></a></div>
        </aside>
      </div>
    </div>
  </section>