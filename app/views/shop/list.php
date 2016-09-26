<?php
use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\page\api\Page;
use yii\widgets\LinkPager;

$page = Page::get('page-shop-search');

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Shop', 'url' => ['shop/index']];
$this->params['breadcrumbs'][] = $page->model->title;

?>


<div class="row">
<section class="col-main col-sm-9 col-xs-12 ">
          <div class="category-title">
            <h1>Заголовок</h1>
          </div>
          
          <div class="category-products">
            <div class="toolbar">
             
            
              <div class="pager">
                  <?= Catalog::pages()?>
              </div>
            </div>
            <ul id="products-list" class="products-list">
                
                 <?php if(count($items)) : ?>
                            <?php foreach($items as $item) : ?>
                
                                <li class="item odd">
                                    <div class="col-item">
                                        <div class="product_image">
                                            <div class="images-container">
                                                <a class="product-image" title="<?= $item->title?>" href="/shop/view/<?= $item->title?>"> 
                                                    <img src="<?= $item->image?>" class="img-responsive" alt="<?= $item->title?>">
                                                </a>
                                                
                                                
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="product-shop">
                                        <h2 class="product-name"><a title="<?= $item->title?>" href="/shop/view/<?= $item->slug?>"><?= $item->title?> </a></h2>
                                        <div class="price-box">
                                          
                                          <p class="special-price"> <span class="price-label"></span> <span  class="price"> <?= $item->price?> </span> грн.</p>
                                        </div>

                                        <div class="desc std">
                                            <?= $item->description?>
                                          
                                        </div>
                                        <div class="actions">
                                          <button class="button btn-cart ajx-cart" title="Добавить в корзину" type="button"><span>Добавить в корзину</span></button>
                                          
                                              
                                      </div>
                                        
                                    </div>

                                </li>
                               
                            <?php endforeach; ?>
                           
                        <?php else : ?>
                            <p>Ничего не найдено .</p>
                <?php endif; ?>
               
            </ul>
          </div>
        </section>
</div>


