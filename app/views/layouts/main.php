<?php
use yii\easyii\modules\shopcart\api\Shopcart;
use yii\easyii\modules\subscribe\api\Subscribe;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use yii\helpers\Html;
use yii\easyii\modules\catalog\api\Catalog;
use app\models\CustomModel;

$asset = \app\assets\AppAsset::register($this);

$goods = Shopcart::goods();
$goodsCount = count($goods);

?>
<?php $this->beginContent('@app/views/layouts/base.php'); ?>


 
  <!-- Header -->
  <header class="header-container">
   
      <div class="section ">
      <div class="container ">
        <div class="row ">
          <div class="col-xs-12 ">
            <!-- Header Top Links -->
            <div class="toplinks ">
              <div class="links ">
                <div>
                  <a title="О проекте " href="page/about">
                      <span class="hidden-xs ">О проекте</span>
                  </a>
                </div>
                <div>
                  <a title="Доставка " href="page/delivery">
                      <span class="hidden-xs">Доставка</span>
                  </a>
                </div>
                <div>
                  <a title="Контакты " href="contact ">
                      <span class="hidden-xs ">Контакты</span>
                  </a>
                </div>
                <div>
                  <a title="Магазины " href="page/shops">
                      <span class="hidden-xs">Магазины</span>
                  </a>
                </div>
              </div>
            </div>
            <!-- End Header Top Links -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-xs-6 text-center">
            <div class="phone">
                (067)<span>4813446</span>
            </div>
            <div class="phone">
                (093)<span>4221010</span>
            </div>
          </div>
          <div class="col-md-4  text-center">
            <!-- Header Logo -->
            <img alt="Lerox" src="<?= $asset->baseUrl ?>/images/Lerox_logo.png"  width="230px" >
            <!-- End Header Logo -->
          </div>
          <div class="col-md-4 ">
            
              <div class="top-cart-contain ">
                <div class="mini-cart ">
                  <i class="icon-cart hidden-xs "></i>
                  <div data-hover="dropdown " class="basket ">
                    <a href="shopcart ">
                        <i class="icon-cart-sm hidden-sm hidden-md hidden-lg"></i>
                                   <div class="cart-box">
                                       <span class="title">Корзина</span>
                                       <span id="cart-total"><?= $goodsCount ?></span>
                                   </div>

                            </a>
                  </div>
                  <div>
                    <div style="display: none; " class="top-cart-content arrow_box ">
                      <div class="block-subtitle ">Добавленные товары</div>
                      <?php if(count($goods)) : ?>
                                        <ul id="cart-sidebar" class="mini-products-list">
                                            <? $summCostAllIngredients = 0; ?>
                                            <?php foreach($goods as $good) : ?>   
                                             
                                            <li class="item even">
                                                 <?=  Html::img($good->item->image,[
                                                    'alt' =>$good->item->title,
                                                    'class' => 'product-image',
                                                    'width'=>'80',
                                                    'height'=>'auto', ]);?>
                                                
                                                
                                                
                                                <div class="detail-item">
                                                    <div class="product-details"> 
                                                        
                                                      <?=  Html::a('&nbsp;', 
                                                            ['/shopcart/remove/', 'id' => $good->id], 
                                                            ['title'=>'Удалить из корзины', 'class'=>'glyphicon glyphicon-remove' ]);?>
                                                        
                                                        <? $ingridients = explode ('|',$good->options)?>
                                                        
                                                          <p class="product-name"> <?=$good->item->title ?></p>
                                                        
                                                        <?  $summCostIngredients = 0;?>
                                                        <? if (Catalog::get($ingridients[0] )):?> 
                                                                <h5>Составное средство. </h5>
                                                              
                                                                    <? foreach ($ingridients as $ingridient) :?>
                                                                            <? $component = Catalog::get($ingridient); ?>
                                                                            <? $summCostIngredients+=$component->price; ?>
                                                                    <? endforeach;?>

                                                                <? else :?>  
                                                                  <?= $good->options ? "($good->options)" : '' ?>
                                                        <? endif; ?>
                                                        

                                                     
                                                    </div>
                                                    <? $summCostIngredients += $good->price ?>
                                                    <div class="product-details-bottom"> 
                                                        <span class="price">
                                                            <?= number_format($summCostIngredients  * $good->count, 2, ',', '').'  грн.'; ?>  
                                                        </span> 
                                                        <span class="title-desc">Количество:</span> 
                                                        <strong> <?= $good->count; ?></strong> 
                                                    </div>
                                                </div>
                                             </li>  
                                              
                                               <? $summCostAllIngredients += $summCostIngredients * $good->count; ?>
                                            <?php endforeach; ?>
                                              
                                              
                                        </ul>
                            
                           
                            <div class="top-subtotal">Всего: <span class="price"><?=number_format($summCostAllIngredients, 2, ',', '')?> грн.</span></div>
                            <div class="actions">
                             
                              <?= Html::a('Оформить заказ', ['/shopcart'], ['class'=>'view-cart']) ?>
                              
                          
                            </div>
                          </div>
                        </div>
                      </div>
		<?php else : ?>
                    <div class="top-subtotal">Корзина пуста</div>
                <?php endif; ?>	
                    </div>
                  </div>
                  <!-- End Top Cart -->
                
           
          
        </div>
      </div>
      </div>
  </header>
  <!-- end header --> 
  <!-- Navbar -->
  <nav class="">
    <div class="container">
      <div class="nav-inner"> 
        
        <!-- mobile-menu -->
        <div class="hidden-desktop" id="mobile-menu">
          <ul class="navmenu">
            <li>
              <div class="menutop">
                <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
                <h2>Menu</h2>
              </div>
              <ul style="display:none;" class="submenu">
                <li>
                  <ul class="topnav">
                      <li class="level0 nav-7 level-top parent"> <a class="level-top" href="/"> <span>Главная</span> </a>
                    
                    </li>
                    
                    <li class="level0 nav-7 level-top parent"> <a class="level-top" href="#grid.html"> <span>Fashion</span> </a> </li>
                    <li class="level0 nav-8 level-top parent"> <a class="level-top" href="#grid.html"> <span>Women</span> </a> </li>
                    <li class="level0 parent drop-menu"><a href="#blog.html"><span>Blog</span> </a><em>+</em>
                     
                    </li>
                    <li class="level0 nav-9 level-top last parent "> <a class="level-top" href="/custom"> <span>Создать средство</span> </a> </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <!--navmenu--> 
        </div>
        <!--End mobile-menu --> 
       
        <a class="logo-small" title="Lerox" href="/index"><img alt="Lerox" src="<?= $asset->baseUrl ?>/images/logo-small.png"></a>
        <ul id="nav" class="hidden-xs">
            <li class="level0 parent drop-menu"><a href="/" class="level-top"><span>Главная</span> </a>
            
          </li>
          
           <li class="level0 parent drop-menu"> <a class="level-top" href="/news"><span>Новости и новинки</span></a>
       
          </li>
          
          <li class="level0 nav-7 level-top parent"> <a href="/grid" class="level-top "> <span>Готовые средства</span> </a>
            <div class="level0-wrapper dropdown-6col" style="display:none;">
              <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                  <ul class="level0">
                      <? $model = new CustomModel(); ?>
                      <? $categories = $model->getChaildCategories('gotovaya-produkciya'); ?>
                      <? foreach ($categories as $category): ?>
                            <li class="level1 nav-6-1 parent item"> 
                                <a href="/grid/category/<?=$category->slug?>"><span><?=$category->title?></span></a> 
                          
                                  <!--sub sub category-->
                                  <ul class="level1">
                                    <? $subcategories = $model->getChaildCategories($category->slug);?>
                                      <? foreach ($subcategories as $subcategory): ?>
                                      
                                    <li class="level2 nav-6-1-1"> 
                                        <a href="/grid/category/<?=$subcategory->slug?>">
                                         <span><?=$subcategory->title?></span>
                                        </a> 
                                    </li>
                                    
                                    
                                     <? endforeach;     ?>
                                  </ul>
                                  <!--sub sub category--> 
                                </li>
                    
                       <? endforeach;     ?>
                    
                  </ul>
                  <div class="nav-add">
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
                
                
                
                <!--nav-block nav-block-right std grid12-4--> 
              </div>
            </div>
          </li>
       
          <li class="level0 parent drop-menu"> <a class="level-top" href="/custom"><span>Создать средство</span></a>
       
          </li>
          
          <li class="level0 nav-5 level-top parent"><a href="/blog"><span>Блог </span> </a>
           
          </li>
          
          <li class="level0 nav-5 level-top parent"><a href="/guestbook"><span>Отзывы </span> </a>
           
          </li>
          
          <li class="nav-custom-link level0 level-top parent">
              
               
              
             <?=$this->render('_search_form', ['text' => $text]) ?>
          </li>
        
          
          
        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav --> 
    
  
  <div id="wrapper" class="container">
  
  <main>
        <?php if($this->context->id != 'site') : ?>
            <br/>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])?>
        <?php endif; ?>
        <?= $content ?>
        <div class="push"></div>
    </main>


</div>
 <!-- Footer -->
  <footer class="footer">
 
    <div class="footer-middle container">
      <div class="col-md-3 col-sm-4">
        <div class="footer-logo"><a href="/" title="Logo"><img src="<?= $asset->baseUrl ?>/images/footer-logo.png" alt="logo"></a></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam arcu. </p>
        <div class="payment-accept">
          <div><img src="<?= $asset->baseUrl ?>/images/payment-1.png" alt="payment"> <img src="<?= $asset->baseUrl ?>/images/payment-2.png" alt="payment"> <img src="<?= $asset->baseUrl ?>/images/payment-3.png" alt="payment"> <img src="<?= $asset->baseUrl ?>/images/payment-4.png" alt="payment"></div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4">
        <h4>Руководство покупателя</h4>
        <ul class="links">
          <li class="first"><a href="/page/delivery" title="Доставка">Доставка</a></li>
          <li><a href="/grid" title="Каталог готовых средств">Каталог готовых средств</a></li>
          <li><a href="/custom" title="Создание собственных средств">Создание собственных средств</a></li>
          
        </ul>
      </div>
      
      <div class="col-md-3 col-sm-4">
        <h4>Информация</h4>
        <ul class="links">
          <li class="first"><a href="/page/about" title="О проекте">О проекте</a></li>
          <li><a href="/page/shops" title="Магазин">Магазин</a></li>
          <li><a href="/news" title="Новости и новинки">Новости и новинки</a></li>
          <li><a href="/page/poleznoe" title="Полезное">Полезное</a></li>
          <li><a href="/guestbook" title="Отзывы">Отзывы</a></li>
          <li class=" last"><a href="/sitemap" title="Карта сайта" >карта сайта</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-4">
        <h4>Контакты</h4>
        <div class="contacts-info">
          <address>
          <i class="add-icon">&nbsp;</i>Киев, ул. Нагорная 25-27, <br>
          &nbsp; каб. 29
          </address>
          <div class="phone-footer"><i class="phone-icon">&nbsp;</i>(093)4221010, &nbsp; (067)4813446</div>
          <div class="email-footer"><i class="email-icon">&nbsp;</i> <a href="mailto:lerox.cosmetics@gmail.com">lerox.cosmetics@gmail.com</a> </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom container">
      <div class="col-sm-5 col-xs-12 coppyright"> &copy; 2016 V & V Studio. </div>
      <div class="col-sm-7 col-xs-12 company-links">
        <ul class="links">
          <li class="last"><a href="#" title="Created by YII2">Created by YII2 .</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 
<?php $this->endContent(); ?>
