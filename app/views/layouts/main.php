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
                                                            <?= $summCostIngredients  * $good->count.'  грн.'; ?>  
                                                        </span> 
                                                        <span class="title-desc">Количество:</span> 
                                                        <strong> <?= $good->count; ?></strong> 
                                                    </div>
                                                </div>
                                             </li>  
                                              
                                               <? $summCostAllIngredients += $summCostIngredients * $good->count; ?>
                                            <?php endforeach; ?>
                                              
                                              
                                        </ul>
                            
                           
                            <div class="top-subtotal">Всего: <span class="price"><?=$summCostAllIngredients?> грн.</span></div>
                            <div class="actions">
                              <button class="btn-checkout" type="button"><span>Оформить заказ</span></button>
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
                    <li class="level0 nav-9 level-top last parent "> <a class="level-top" href="/custom"> <span>Создать средство</span> </a> </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <!--navmenu--> 
        </div>
        <!--End mobile-menu --> 
       
        <a class="logo-small" title="Lerox" href="/index.php"><img alt="Lerox" src="<?= $asset->baseUrl ?>/images/logo-small.png"></a>
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
          
          <li class="level0 parent drop-menu"> <a class="level-top" href="/custom"><span>Создать средство</span></a>
       
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
        <div class="footer-logo"><a href="index.html" title="Logo"><img src="<?= $asset->baseUrl ?>/images/footer-logo.png" alt="logo"></a></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam arcu. </p>
        <div class="payment-accept">
          <div><img src="<?= $asset->baseUrl ?>/images/payment-1.png" alt="payment"> <img src="<?= $asset->baseUrl ?>/images/payment-2.png" alt="payment"> <img src="<?= $asset->baseUrl ?>/images/payment-3.png" alt="payment"> <img src="<?= $asset->baseUrl ?>/images/payment-4.png" alt="payment"></div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4">
        <h4>Shopping Guide</h4>
        <ul class="links">
          <li class="first"><a href="#" title="How to buy">How to buy</a></li>
          <li><a href="faq.html" title="FAQs">FAQs</a></li>
          <li><a href="#" title="Payment">Payment</a></li>
          <li><a href="#" title="Shipment&lt;/a&gt;">Shipment</a></li>
          <li><a href="delivery.html" title="delivery">Delivery</a></li>
          <li class="last"><a href="#" title="Return policy">Return policy</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-4">
        <h4>Style Advisor</h4>
        <ul class="links">
          <li class="first"><a title="Your Account" href="login.html">Your Account</a></li>
          <li><a title="Information" href="#">Information</a></li>
          <li><a title="Addresses" href="#">Addresses</a></li>
          <li><a title="Addresses" href="#">Discount</a></li>
          <li><a title="Orders History" href="#">Orders History</a></li>
          <li class="last"><a title=" Additional Information" href="#">Additional Information</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-4">
        <h4>Information</h4>
        <ul class="links">
          <li class="first"><a href="sitemap.html" title="Site Map">Site Map</a></li>
          <li><a href="#/" title="Search Terms">Search Terms</a></li>
          <li><a href="#" title="Advanced Search">Advanced Search</a></li>
          <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
          <li><a href="#" title="Suppliers">Suppliers</a></li>
          <li class=" last"><a href="#" title="Our stores" class="link-rss">Our stores</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-4">
        <h4>Contact us</h4>
        <div class="contacts-info">
          <address>
          <i class="add-icon">&nbsp;</i>123 Main Street, Anytown, <br>
          &nbsp;CA 12345  USA
          </address>
          <div class="phone-footer"><i class="phone-icon">&nbsp;</i> +1 800 123 1234</div>
          <div class="email-footer"><i class="email-icon">&nbsp;</i> <a href="mailto:support@magikcommerce.com">support@magikcommerce.com</a> </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom container">
      <div class="col-sm-5 col-xs-12 coppyright"> &copy; 2015 Magikcommerce. All Rights Reserved.</div>
      <div class="col-sm-7 col-xs-12 company-links">
        <ul class="links">
          <li><a href="#" title="Magento Themes">Magento Themes</a></li>
          <li><a href="#" title="Premium Themes">Premium Themes</a></li>
          <li><a href="#" title="Responsive Themes">Responsive Themes</a></li>
          <li class="last"><a href="#" title="Magento Extensions">Magento Extensions</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 
<?php $this->endContent(); ?>
