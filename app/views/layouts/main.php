<?php
use yii\easyii\modules\shopcart\api\Shopcart;
use yii\easyii\modules\subscribe\api\Subscribe;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use yii\helpers\Html;
use yii\easyii\modules\catalog\api\Catalog;

$asset = \app\assets\AppAsset::register($this);

$goods = Shopcart::goods();
$goodsCount = count($goods);

?>
<?php $this->beginContent('@app/views/layouts/base.php'); ?>


 
  <!-- Header -->
  <header class="header-container">
   
    <div class="header container">
      <div class="row">
        <div class="col-lg-2 col-sm-3 col-md-2 col-xs-12"> 
          <!-- Header Logo --> 
          <a class="logo" title="Lerox" href="#"><img alt="Lerox" src="<?= $asset->baseUrl ?>/images/Lerox_logo.jpg"></a> 
          <!-- End Header Logo --> 
        </div>
        
		<div class="col-lg-7 col-sm-4 col-md-6 col-xs-12"> 
          <!-- Search-col -->
				 
			<div class="header-top"> 
				
                            <div class="row">  
					   <div class="col-xs-4">
						<div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="<?= $asset->baseUrl ?>/images/english.png" alt="language"> English <span class="caret"></span> </a>
						  <ul class="dropdown-menu" role="menu">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="<?= $asset->baseUrl ?>/images/english.png" alt="language"> English </a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="<?= $asset->baseUrl ?>/images/francais.png" alt="language"> French </a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="<?= $asset->baseUrl ?>/images/german.png" alt="language"> German </a></li>
						  </ul>
						</div>
					  </div> 
					
					<div class="col-xs-8"> 
						<!-- Header Top Links -->
						<div class="toplinks">
						  <div class="links">
							<div class="myaccount"><a title="My Account" href="#login.html"><span class="hidden-xs">My Account</span></a></div>
							<div class="wishlist"><a title="My Wishlist" href="#wishlist.html"><span class="hidden-xs">Wishlist</span></a></div>
							<div class="check"><a title="Checkout" href="#checkout.html"><span class="hidden-xs">Checkout</span></a></div>
							<div class="phone hidden-xs">1 800 123 1234</div>
						  </div>
						</div>
						<!-- End Header Top Links --> 
                                        </div>
                                </div> 
				

			</div> 
		  <!-- End Search-col --> 
       

                    </div>
        
		<div class="col-lg-7 col-sm-4 col-md-6 col-xs-12"> 
          <!-- Phone-col -->
				 
			<div class="header-top"> 
				
					<div class="row">  
					   <div class="col-xs-6  hidden-xs hidden-sm hidden-md">
					   <!-- Header Top Phone 1-->
						
							<div class="phone">1 800 123 2222</div>
						
						<!-- End Header Top Phone 1--> 
						
					  </div> 
					
					<div class="col-xs-6  hidden-xs hidden-sm hidden-md"> 
						<!-- Header Top Phone 2-->
						
							<div class="phone">1 800 123 3333</div>
						
						
						<!-- End Header Top Phone 2--> 
				  </div>
				  <div class="col-xs-10 hidden-xs hidden-sm hidden-lg"> 
						<!-- Header Top Phone 3-->
						
							<div class="phone">1 800 123 4444</div>
						
						<!-- End Header Top Phone 3--> 
				  </div>
					
					
					
					</div> 
				

			</div> 
		  <!-- End Phone-col --> 
       

	   </div>
        
		
		<!-- Top Cart -->
        <div class="col-lg-3 col-sm-5 col-md-4 col-xs-12">
            <div class="top-cart-contain">
            <div class="mini-cart">
             <i class="icon-cart hidden-xs "></i>
             
			<div  data-hover="dropdown" class="basket"> 
                             <a href="/shopcart"><i class="icon-cart-sm hidden-sm  hidden-md hidden-lg"></i>
                                   <div class="cart-box">
                                       <span class="title">Корзина</span>
                                       <span id="cart-total"> <?= $goodsCount ?>  </span>
                                   </div>

                            </a>
			</div>
                        <div>
                          <div style="display: none;" class="top-cart-content arrow_box">
                            <div class="block-subtitle">Добавленные товары</div>
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
                                                        <?  $summCostIngredients = 0;?>
                                                        <? if (count($ingridients ) > 0):?> 
                                                        <h5>Составное средство. </h5>
                                                        <p class="product-name"> 
                                                            
                                                             <?=$good->item->title ?> 
                                                            
                                                        </p>


                                                            <? foreach ($ingridients as $ingridient) :?>
                                                                    <? $component = Catalog::get($ingridient); ?>
                                                                    <? $summCostIngredients+=$component->price; ?>
                                                            <? endforeach;?>

                                                        <? else :?>  
                                                          <?= $good->options ? "($good->options)" : '' ?>
                                                        <? endif; ?>
                                                        

                                                     
                                                    </div>
                                                    <div class="product-details-bottom"> <span class="price">$100.00</span> <span class="title-desc">Qty:</span> <strong>1</strong> </div>
                                                </div>
                                              </li>  
                                              
                                              
                                              
                                              
                                        </ul>
                            
                            <? $summCostAllIngredients += $summCostIngredients * $good->count; ?>
                            <?php endforeach; ?>
                            <div class="top-subtotal">Subtotal: <span class="price">$420.00</span></div>
                            <div class="actions">
                              <button class="btn-checkout" type="button"><span>Checkout</span></button>
                              <?= Html::a('Корзина', ['/shopcart'], ['class'=>'view-cart']) ?>
                          
                            </div>
                          </div>
                        </div>
                      </div>
		<?php else : ?>
                    <div class="top-subtotal">Корзина пуста</div>
                <?php endif; ?>		
            </div>
          <div class="signup"> &nbsp</div>
        </div> 
        <!-- End Top Cart --> 
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
                      <li class="level0 nav-7 level-top parent"> <a class="level-top" href="/index.php"> <span>Главная</span> </a>
                    
                    </li>
                    <li class="level0 nav-6 level-top parent"> <a class="level-top" href="#"> <span>Pages</span> </a>
                     
                    </li>
                    <li class="level0 nav-7 level-top parent"> <a class="level-top" href="#grid.html"> <span>Fashion</span> </a> </li>
                    <li class="level0 nav-8 level-top parent"> <a class="level-top" href="#grid.html"> <span>Women</span> </a> </li>
                    <li class="level0 parent drop-menu"><a href="#blog.html"><span>Blog</span> </a><em>+</em>
                     
                    </li>
                    <li class="level0 nav-9 level-top last parent "> <a class="level-top" href="#contact.html"> <span>Contact</span> </a> </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <!--navmenu--> 
        </div>
        <!--End mobile-menu --> 
       
        <a class="logo-small" title="Magento Commerce" href="#index.html"><img alt="Lerox" src="<?= $asset->baseUrl ?>/images/logo-small.png"></a>
        <ul id="nav" class="hidden-xs">
            <li class="level0 parent drop-menu"><a href="/index.php" class="active"><span>Главная</span> </a>
            
          </li>
          <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a>
    
          </li>
          <li class="level0 nav-5 level-top first"> <a href="#grid.html" class="level-top"> <span>Women</span> </a>
         
          </li>
          <li class="level0 nav-7 level-top parent"> <a href="#grid.html" class="level-top"> <span>Men</span> </a>
           
          </li>
          <li class="level0 nav-5 level-top first"> <a class="level-top" href="#grid.html"> <span>Electronics</span> </a>
          
          </li>
          <li class="level0 nav-5 level-top parent"><a href="#grid.html"><span>Furniture </span> </a>
           
          </li>
          <li class="level0 parent drop-menu"><a href="#blog.html"><span>Blog</span> </a>
          
          </li>
          <li class="nav-custom-link level0 level-top parent"> <a class="level-top" href="/custom"><span>Создать средство</span></a>
       
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
<footer>
    <div class="container footer-content">
        <div class="row">
            <div class="col-md-2">
                Subscribe to newsletters
            </div>
            <div class="col-md-6">
                <?php if(Yii::$app->request->get(Subscribe::SENT_VAR)) : ?>
                    You have successfully subscribed
                <?php else : ?>
                    <?= Subscribe::form() ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4 text-right">
                ©2015 noumo
            </div>
        </div>
    </div>
</footer>
<?php $this->endContent(); ?>
