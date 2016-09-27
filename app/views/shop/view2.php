<?php
use app\models\AddToCartForm;
use yii\easyii\modules\catalog\api\Catalog;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = $item->seo('title', $item->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Shop', 'url' => ['shop/index']];
$this->params['breadcrumbs'][] = ['label' => $item->cat->title, 'url' => ['shop/cat', 'slug' => $item->cat->slug]];
$this->params['breadcrumbs'][] = $item->model->title;

$colors = [];
if(!empty($item->data->color) && is_array($item->data->color)) {
    foreach ($item->data->color as $color) {
        $colors[$color] = $color;
    }
}
?>
<h1><?= $item->seo('h1', $item->title) ?></h1>

<div class="row">
    <div class="product-view wow">
            <div class="product-essential">
              <form action="./Inspire_product_files/Inspire_product.htm" method="post" id="product_addtocart_form">
                <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
                  <ul class="moreview" id="moreview" style="display: block; width: 561px; height: 542.873px;">
                    <li class="moreview_thumb thumb_1" style="opacity: 0; left: 115px; position: absolute; overflow: hidden; display: none; background-image: none;"> <img class="moreview_thumb_image" src="./Inspire_product_files/product1.jpg" style="display: inline; width: 444px; height: 540.873px; opacity: 1;"> <img class="moreview_source_image" src="./Inspire_product_files/product2.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="./Inspire_product_files/product3.jpg"><img src="./Inspire_product_files/product1.jpg" class="zoomImg" style="position: absolute; top: -92.059px; left: -9.11211px; opacity: 0; width: 700px; height: 850px; border: none; max-width: none;"><img src="file:///F:/webDesign/bootstrapExample/Inspire_product_files/product1.jpg" class="zoomImg" style="position: absolute; top: -122.745px; left: -193.063px; opacity: 0; width: 700px; height: 850px; border: none; max-width: none;"></li>
                    <li class="moreview_thumb thumb_2" style="left: 115px; position: absolute; overflow: hidden; opacity: 0; display: none; background-image: none;"> <img class="moreview_thumb_image" src="./Inspire_product_files/product4.jpg" style="display: inline; width: 444px; height: 540.873px;"> <img class="moreview_source_image" src="./Inspire_product_files/product4.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="./Inspire_product_files/product4(1).jpg"><img src="./Inspire_product_files/product4.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 700px; height: 850px; border: none; max-width: none;"><img src="file:///F:/webDesign/bootstrapExample/Inspire_product_files/product4.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 700px; height: 850px; border: none; max-width: none;"></li>
                    <li class="moreview_thumb thumb_3 moreview_thumb_active" style="left: 115px; position: absolute; overflow: hidden; display: list-item; opacity: 1; background-image: none;"> <img class="moreview_thumb_image" src="./Inspire_product_files/product5.jpg" style="display: inline; width: 444px; height: 540.873px; opacity: 1;"> <img class="moreview_source_image" src="./Inspire_product_files/product5.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="./Inspire_product_files/product5.jpg"><img src="./Inspire_product_files/product5.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 700px; height: 850px; border: none; max-width: none;"><img src="file:///F:/webDesign/bootstrapExample/Inspire_product_files/product5.jpg" class="zoomImg" style="position: absolute; top: -171.616px; left: -243.179px; opacity: 0; width: 700px; height: 850px; border: none; max-width: none;"></li>
                    <li class="moreview_thumb thumb_4" style="left: 115px; position: absolute; overflow: hidden; background-image: none;"> <img class="moreview_thumb_image" src="./Inspire_product_files/product6.jpg" style="display: inline; width: 444px; height: 540.873px;"> <img class="moreview_source_image" src="./Inspire_product_files/product6.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="./Inspire_product_files/product6.jpg"><img src="./Inspire_product_files/product6.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 700px; height: 850px; border: none; max-width: none;"><img src="file:///F:/webDesign/bootstrapExample/Inspire_product_files/product6.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 700px; height: 850px; border: none; max-width: none;"></li>
                    <li class="moreview_thumb thumb_5" style="left: 115px; position: absolute; overflow: hidden; background-image: none;"> <img class="moreview_thumb_image" src="./Inspire_product_files/product7.jpg" style="display: inline; width: 444px; height: 540.873px;"> <img class="moreview_source_image" src="./Inspire_product_files/product7.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="./Inspire_product_files/product7.jpg"><img src="./Inspire_product_files/product7.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 700px; height: 850px; border: none; max-width: none;"><img src="file:///F:/webDesign/bootstrapExample/Inspire_product_files/product7.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 700px; height: 850px; border: none; max-width: none;"></li>
                    <li class="moreview_thumb thumb_6" style="left: 115px; position: absolute; overflow: hidden; display: none; opacity: 1; background-image: none;"> <img class="moreview_thumb_image" src="./Inspire_product_files/product8.jpg" style="display: inline; width: 444px; height: 540.873px; opacity: 1;"> <img class="moreview_source_image" src="./Inspire_product_files/product8.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="./Inspire_product_files/product8.jpg"><img src="./Inspire_product_files/product8.jpg" class="zoomImg" style="position: absolute; top: -4.54613px; left: -210.717px; opacity: 0; width: 700px; height: 850px; border: none; max-width: none;"><img src="file:///F:/webDesign/bootstrapExample/Inspire_product_files/product8.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 700px; height: 850px; border: none; max-width: none;"></li>
     
                  <li class="moreview_icon" style="opacity: 1;">&nbsp;</li><li class="moreview_magnifier" style="margin: 0px; padding: 0px; top: -0.127273px; display: none; left: 230px;"><div style="margin: 0px; padding: 0px; width: 444px; height: 541px;"><img src="file:///F:/webDesign/bootstrapExample/Inspire_product_files/product5.jpg" style="margin: 0px; padding: 0px; width: 444px; height: 540.873px; display: inline; left: 0px; top: 0.127273px;"></div></li><li class="moreview_icon" style="opacity: 1;">&nbsp;</li><li class="moreview_zoom_area" style="margin: 0px; opacity: 0; left: 571px; display: none; background-image: none;"><div class="moreview_description" style="width: 42.0896px; bottom: 0px; left: 0px; opacity: 0.7; display: none;"></div><div style="width: 82.0896px; height: 100px;"><img class="moreview_zoom_img" src="./Inspire_product_files/product5.jpg" style="width: 82.0896px; height: 100px; left: 0px; top: 0.023531px;"></div></li><li class="moreview_small_thumbs" style="top: 0px; height: 542.873px;"><ul style="height: 1204px;"><li class="moreview_smallthumb_navtoend vertical" style="opacity: 0.4; margin: 0px 0px 10px; top: -139px;"><img class="moreview_small_thumb" src="file:///F:/webDesign/bootstrapExample/Inspire_product_files/product8.jpg" height="126" style="width: 103px; height: 126px;"></li><li class="vertical moreview_smallthumb_first" style="opacity: 0.4; margin: 0px 0px 10px; top: -139px;"><img class="moreview_small_thumb" src="file:///F:/webDesign/bootstrapExample/Inspire_product_files/product1.jpg" height="126" style="width: 103px; height: 126px;"></li><li class="vertical" style="opacity: 0.4; margin: 0px 0px 10px; top: -139px;"><img class="moreview_small_thumb" src="file:///F:/webDesign/bootstrapExample/Inspire_product_files/product4.jpg" height="126" style="width: 103px; height: 126px;"></li><li class="vertical moreview_smallthumb_active" style="opacity: 1; margin: 0px 0px 10px; top: -139px;"><img class="moreview_small_thumb" src="file:///F:/webDesign/bootstrapExample/Inspire_product_files/product5.jpg" height="126" style="width: 103px; height: 126px;"></li><li class="vertical moreview_smallthumb_last" style="opacity: 0.4; margin: 0px 0px 10px; top: -139px;"><img class="moreview_small_thumb" src="file:///F:/webDesign/bootstrapExample/Inspire_product_files/product6.jpg" height="126" style="width: 103px; height: 126px;"></li><li class="vertical" style="opacity: 0.4; margin: 0px 0px 10px; top: -139px;"><img class="moreview_small_thumb" src="file:///F:/webDesign/bootstrapExample/Inspire_product_files/product7.jpg" height="126" style="width: 103px; height: 126px;"></li><li class="vertical" style="opacity: 0.4; margin: 0px 0px 10px; top: -139px;"><img class="moreview_small_thumb" src="file:///F:/webDesign/bootstrapExample/Inspire_product_files/product8.jpg" height="126" style="width: 103px; height: 126px;"></li><li class="moreview_smallthumb_navtostart vertical" style="opacity: 0.4; margin: 0px 0px 10px; top: -139px;"><img class="moreview_small_thumb" src="file:///F:/webDesign/bootstrapExample/Inspire_product_files/product1.jpg" height="126" style="width: 103px; height: 126px;"></li></ul></li></ul>
                  <div class="moreview-control"> <a style="right: 47.5px;" href="javascript:void(0)" class="moreview-prev"></a> <a style="right: 47.5px;" href="javascript:void(0)" class="moreview-next"></a> </div>
                </div>
                
                <!-- end: more-images -->
                
                <div class="product-shop col-lg-6 col-sm-6 col-xs-12">
                  <div class="product-next-prev"> <a class="product-next" href="./Inspire_product_files/Inspire_product.htm"><span></span></a> <a class="product-prev" href="./Inspire_product_files/Inspire_product.htm"><span></span></a> </div>
                  <div class="product-name">
                    <h1>Waistcoat with Horizontal Stripes</h1>
                  </div>
                  <div class="ratings">
                    <div class="rating-box">
                      <div style="width:60%" class="rating"></div>
                    </div>
                    <p class="rating-links"> <a href="./Inspire_product_files/Inspire_product.htm">1 Review(s)</a> <span class="separator">|</span> <a href="./Inspire_product_files/Inspire_product.htm">Add Your Review</a> </p>
                  </div>
                  <p class="availability in-stock"><span>In Stock</span></p>
                  <div class="price-block">
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $315.99 </span> </p>
                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $309.99 </span> </p>
                    </div>
                  </div>
                  <div class="short-description">
                    <h2>Quick Overview</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu.<br>
                      Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt... </p>
                  </div>
                  <div class="add-to-box">
                    <div class="add-to-cart">
                      <label for="qty">Quantity:</label>
                      <div class="pull-left">
                        <div class="custom pull-left">
                          <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                          <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                          <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                        </div>
                      </div>
                      <button onclick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button"><span><i class="icon-basket"></i> Add to Cart</span></button>
                    </div>
                    <div class="email-addto-box">
                      <ul class="add-to-links">
                        <li> <a class="link-wishlist" href="./Inspire_product_files/Inspire_product.htm"><span>Add to Wishlist</span></a></li>
                        <li><span class="separator">|</span> <a class="link-compare" href="./Inspire_product_files/Inspire_product.htm"><span>Add to Compare</span></a></li>
                      </ul>
                      <p class="email-friend"><a href="./Inspire_product_files/Inspire_product.htm" class=""><span>Email to Friend</span></a></p>
                    </div>
                  </div>
                  <div class="custom-box"><img alt="banner" src="./Inspire_product_files/cus-img.png"></div>
                </div>
              </form>
            </div>
            <div class="product-collateral">
              <div class="col-sm-12 wow">
                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                  <li class="active"> <a href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product_detail.html#product_tabs_description" data-toggle="tab"> Product Description </a> </li>
                  <li><a href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product_detail.html#product_tabs_tags" data-toggle="tab">Tags</a></li>
                  <li> <a href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product_detail.html#reviews_tabs" data-toggle="tab">Reviews</a> </li>
                  <li> <a href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product_detail.html#product_tabs_custom" data-toggle="tab">Custom Tab</a> </li>
                  <li> <a href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product_detail.html#product_tabs_custom1" data-toggle="tab">Custom Tab1</a> </li>
                </ul>
                <div id="productTabContent" class="tab-content">
                  <div class="tab-pane fade in active" id="product_tabs_description">
                    <div class="std">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>
                      <p> Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis.</p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="product_tabs_tags">
                    <div class="box-collateral box-tags">
                      <div class="tags">
                        <form id="addTagForm" action="./Inspire_product_files/Inspire_product.htm" method="get">
                          <div class="form-add-tags">
                            <label for="productTagName">Add Tags:</label>
                            <div class="input-box">
                              <input class="input-text required-entry" name="productTagName" id="productTagName" type="text" style="width:35%;">
                              <button type="button" title="Add Tags" class=" button btn-add" onclick="submitTagForm()"> <span>Add Tags</span> </button>
                            </div>
                            <!--input-box--> 
                          </div>
                        </form>
                      </div>
                      <!--tags-->
                      <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="reviews_tabs">
                    <div class="box-collateral box-reviews" id="customer-reviews">
                      <div class="box-reviews1">
                        <div class="form-add">
                          <form id="review-form" method="post" action="./Inspire_product_files/Inspire_product.htm">
                            <h3>Write Your Own Review</h3>
                            <fieldset>
                              <h4>How do you rate this product? <em class="required">*</em></h4>
                              <span id="input-message-box"></span>
                              <table id="product-review-table" class="data-table">
                                <colgroup>
                                <col>
                                <col width="1">
                                <col width="1">
                                <col width="1">
                                <col width="1">
                                <col width="1">
                                </colgroup>
                                <thead>
                                  <tr class="first last">
                                    <th>&nbsp;</th>
                                    <th><span class="nobr">1 *</span></th>
                                    <th><span class="nobr">2 *</span></th>
                                    <th><span class="nobr">3 *</span></th>
                                    <th><span class="nobr">4 *</span></th>
                                    <th><span class="nobr">5 *</span></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="first odd">
                                    <th>Price</th>
                                    <td class="value"><input type="radio" class="radio" value="11" id="Price_1" name="ratings[3]"></td>
                                    <td class="value"><input type="radio" class="radio" value="12" id="Price_2" name="ratings[3]"></td>
                                    <td class="value"><input type="radio" class="radio" value="13" id="Price_3" name="ratings[3]"></td>
                                    <td class="value"><input type="radio" class="radio" value="14" id="Price_4" name="ratings[3]"></td>
                                    <td class="value last"><input type="radio" class="radio" value="15" id="Price_5" name="ratings[3]"></td>
                                  </tr>
                                  <tr class="even">
                                    <th>Value</th>
                                    <td class="value"><input type="radio" class="radio" value="6" id="Value_1" name="ratings[2]"></td>
                                    <td class="value"><input type="radio" class="radio" value="7" id="Value_2" name="ratings[2]"></td>
                                    <td class="value"><input type="radio" class="radio" value="8" id="Value_3" name="ratings[2]"></td>
                                    <td class="value"><input type="radio" class="radio" value="9" id="Value_4" name="ratings[2]"></td>
                                    <td class="value last"><input type="radio" class="radio" value="10" id="Value_5" name="ratings[2]"></td>
                                  </tr>
                                  <tr class="last odd">
                                    <th>Quality</th>
                                    <td class="value"><input type="radio" class="radio" value="1" id="Quality_1" name="ratings[1]"></td>
                                    <td class="value"><input type="radio" class="radio" value="2" id="Quality_2" name="ratings[1]"></td>
                                    <td class="value"><input type="radio" class="radio" value="3" id="Quality_3" name="ratings[1]"></td>
                                    <td class="value"><input type="radio" class="radio" value="4" id="Quality_4" name="ratings[1]"></td>
                                    <td class="value last"><input type="radio" class="radio" value="5" id="Quality_5" name="ratings[1]"></td>
                                  </tr>
                                </tbody>
                              </table>
                              <input type="hidden" value="" class="validate-rating" name="validate_rating">
                              <div class="review1">
                                <ul class="form-list">
                                  <li>
                                    <label class="required" for="nickname_field">Nickname<em>*</em></label>
                                    <div class="input-box">
                                      <input type="text" class="input-text required-entry" id="nickname_field" name="nickname">
                                    </div>
                                  </li>
                                  <li>
                                    <label class="required" for="summary_field">Summary<em>*</em></label>
                                    <div class="input-box">
                                      <input type="text" class="input-text required-entry" id="summary_field" name="title">
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class="review2">
                                <ul>
                                  <li>
                                    <label class="required label-wide" for="review_field">Review<em>*</em></label>
                                    <div class="input-box">
                                      <textarea class="required-entry" rows="3" cols="5" id="review_field" name="detail"></textarea>
                                    </div>
                                  </li>
                                </ul>
                                <div class="buttons-set">
                                  <button class="button submit" title="Submit Review" type="submit"><span>Submit Review</span></button>
                                </div>
                              </div>
                            </fieldset>
                          </form>
                        </div>
                      </div>
                      <div class="box-reviews2">
                        <h3>Customer Reviews</h3>
                        <div class="box visible">
                          <ul>
                            <li>
                              <table class="ratings-table">
                                <colgroup>
                                <col width="1">
                                <col>
                                </colgroup>
                                <tbody>
                                  <tr>
                                    <th>Value</th>
                                    <td><div class="rating-box">
                                        <div class="rating" style="width:100%;"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Quality</th>
                                    <td><div class="rating-box">
                                        <div class="rating" style="width:100%;"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Price</th>
                                    <td><div class="rating-box">
                                        <div class="rating" style="width:100%;"></div>
                                      </div></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="review">
                                <h6><a href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product_detail.html#/catalog/product/view/id/61/">Excellent</a></h6>
                                <small>Review by <span>Leslie Prichard </span>on 1/3/2014 </small>
                                <div class="review-txt"> I have purchased shirts from Minimalism a few times and am never disappointed. The quality is excellent and the shipping is amazing. It seems like it's at your front door the minute you get off your pc. I have received my purchases within two days - amazing.</div>
                              </div>
                            </li>
                            <li class="even">
                              <table class="ratings-table">
                                <colgroup>
                                <col width="1">
                                <col>
                                </colgroup>
                                <tbody>
                                  <tr>
                                    <th>Value</th>
                                    <td><div class="rating-box">
                                        <div class="rating" style="width:100%;"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Quality</th>
                                    <td><div class="rating-box">
                                        <div class="rating" style="width:100%;"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Price</th>
                                    <td><div class="rating-box">
                                        <div class="rating" style="width:80%;"></div>
                                      </div></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="review">
                                <h6><a href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product_detail.html#/catalog/product/view/id/60/">Amazing</a></h6>
                                <small>Review by <span>Sandra Parker</span>on 1/3/2014 </small>
                                <div class="review-txt"> Minimalism is the online ! </div>
                              </div>
                            </li>
                            <li>
                              <table class="ratings-table">
                                <colgroup>
                                <col width="1">
                                <col>
                                </colgroup>
                                <tbody>
                                  <tr>
                                    <th>Value</th>
                                    <td><div class="rating-box">
                                        <div class="rating" style="width:100%;"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Quality</th>
                                    <td><div class="rating-box">
                                        <div class="rating" style="width:100%;"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Price</th>
                                    <td><div class="rating-box">
                                        <div class="rating" style="width:80%;"></div>
                                      </div></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="review">
                                <h6><a href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product_detail.html#/catalog/product/view/id/59/">Nicely</a></h6>
                                <small>Review by <span>Anthony  Lewis</span>on 1/3/2014 </small>
                                <div class="review-txt"> Unbeatable service and selection. This store has the best business model I have seen on the net. They are true to their word, and go the extra mile for their customers. I felt like a purchasing partner more than a customer. You have a lifetime client in me. </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="actions"> <a class="button view-all" id="revies-button"><span><span>View all</span></span></a> </div>
                      </div>
                      <div class="clear"></div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="product_tabs_custom">
                    <div class="product-tabs-content-inner clearfix">
                      <p><strong>Lorem Ipsum</strong><span>&nbsp;is
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when 
                        an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the 
                        leap into electronic typesetting, remaining essentially unchanged. It 
                        was popularised in the 1960s with the release of Letraset sheets 
                        containing Lorem Ipsum passages, and more recently with desktop 
                        publishing software like Aldus PageMaker including versions of Lorem 
                        Ipsum.</span></p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="product_tabs_custom1">
                    <div class="product-tabs-content-inner clearfix">
                      <p> <strong> Comfortable </strong><span>&nbsp;preshrunk shirts. Highest Quality Printing.  6.1 oz. 100% preshrunk heavyweight cotton Shoulder-to-shoulder taping Double-needle sleeves and bottom hem     
                        
                        Lorem Ipsumis
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when 
                        an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the 
                        leap into electronic typesetting, remaining essentially unchanged. It 
                        was popularised in the 1960s with the release of Letraset sheets 
                        containing Lorem Ipsum passages, and more recently with desktop 
                        publishing software like Aldus PageMaker including versions of Lorem 
                        Ipsum.</span></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="box-additional">
                  <div class="related-pro wow">
                    <div class="slider-items-products">
                      <div class="new_title center">
                        <h2>Related Products</h2>
                      </div>
                      <div id="related-products-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4 owl-carousel owl-theme" style="opacity: 1; display: block;"> 
                          
                          <!-- Item -->
                          <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 5800px; left: 0px; display: block;"><div class="owl-item" style="width: 290px;"><div class="owl-wrapper-outer"><div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 5800px; left: 0px; display: block;"><div class="owl-item" style="width: 290px;"><div class="item">
                            <div class="col-item">
                              <div class="sale-label sale-top-right">Sale</div>
                              <div class="images-container"> <a class="product-image" title="Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> <img src="./Inspire_product_files/product3.jpg" class="img-responsive" alt="a"> </a>
                                <div class="actions">
                                  <div class="actions-inner">
                                    <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                    <ul class="add-to-links">
                                      <li><a title="Add to Wishlist" class="link-wishlist" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/wishlist.html"><span>Add to Wishlist</span></a></li>
                                      <li><a title="Add to Compare" class="link-compare" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/compare.html"><span>Add to Compare</span></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/quick_view.html"><span><span>Quick View</span></span></a> </div>
                              </div>
                              <div class="info">
                                <div class="info-inner">
                                  <div class="item-title"> <a href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product_detail.html#l" title=" Sample Product"> Sample Product </a> </div>
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
                          </div></div><div class="owl-item" style="width: 290px;"><div class="item">
                            <div class="col-item">
                              <div class="new-label new-top-right">New</div>
                              <div class="images-container"> <a class="product-image" title="Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> <img src="./Inspire_product_files/product2.jpg" class="img-responsive" alt="a"> </a>
                                <div class="actions">
                                  <div class="actions-inner">
                                    <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                    <ul class="add-to-links">
                                      <li><a title="Add to Wishlist" class="link-wishlist" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/wishlist.html"><span>Add to Wishlist</span></a></li>
                                      <li><a title="Add to Compare" class="link-compare" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/compare.html"><span>Add to Compare</span></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/quick_view.html"><span><span>Quick View</span></span></a> </div>
                              </div>
                              <div class="info">
                                <div class="info-inner">
                                  <div class="item-title"> <a href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product_detail.html#l" title=" Sample Product"> Sample Product </a> </div>
                                  <!--item-title-->
                                  <div class="item-content">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div style="width:60%" class="rating"></div>
                                      </div>
                                    </div>
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                                  </div>
                                  <!--item-content--> 
                                </div>
                                <!--info-inner--> 
                                
                                <!--actions-->
                                
                                <div class="clearfix"> </div>
                              </div>
                            </div>
                          </div></div><div class="owl-item" style="width: 290px;"><div class="item">
                            <div class="col-item">
                              <div class="sale-label sale-top-right">Sale</div>
                              <div class="images-container"> <a class="product-image" title="Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> <img alt="a" class="img-responsive" src="./Inspire_product_files/product4.jpg"> </a>
                                <div class="actions">
                                  <div class="actions-inner">
                                    <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                    <ul class="add-to-links">
                                      <li><a title="Add to Wishlist" class="link-wishlist" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/wishlist.html"><span>Add to Wishlist</span></a></li>
                                      <li><a title="Add to Compare" class="link-compare" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/compare.html"><span>Add to Compare</span></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/quick_view.html"><span><span>Quick View</span></span></a> </div>
                              </div>
                              <div class="info">
                                <div class="info-inner">
                                  <div class="item-title"> <a title=" Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> Sample Product </a> </div>
                                  <!--item-title-->
                                  <div class="item-content">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:0%"></div>
                                      </div>
                                    </div>
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                                  </div>
                                  <!--item-content--> 
                                </div>
                                <!--info-inner-->
                                <div class="actions">
                                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                </div>
                                <!--actions-->
                                
                                <div class="clearfix"> </div>
                              </div>
                            </div>
                          </div></div><div class="owl-item" style="width: 290px;"><div class="item">
                            <div class="col-item">
                              <div class="sale-label sale-top-right">Sale</div>
                              <div class="images-container"> <a class="product-image" title="Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> <img alt="a" class="img-responsive" src="./Inspire_product_files/product1.jpg"> </a>
                                <div class="actions">
                                  <div class="actions-inner">
                                    <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                    <ul class="add-to-links">
                                      <li><a title="Add to Wishlist" class="link-wishlist" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/wishlist.html"><span>Add to Wishlist</span></a></li>
                                      <li><a title="Add to Compare" class="link-compare" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/compare.html"><span>Add to Compare</span></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/quick_view.html"><span><span>Quick View</span></span></a> </div>
                              </div>
                              <div class="info">
                                <div class="info-inner">
                                  <div class="item-title"> <a title=" Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> Sample Product </a> </div>
                                  <!--item-title-->
                                  <div class="item-content">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:50%"></div>
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
                                <div class="actions">
                                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                </div>
                                <!--actions-->
                                
                                <div class="clearfix"> </div>
                              </div>
                            </div>
                          </div></div><div class="owl-item" style="width: 290px;"><div class="item">
                            <div class="col-item">
                              <div class="sale-label sale-top-right">Sale</div>
                              <div class="images-container"> <a class="product-image" title="Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> <img alt="a" class="img-responsive" src="./Inspire_product_files/product6.jpg"> </a>
                                <div class="actions">
                                  <div class="actions-inner">
                                    <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                    <ul class="add-to-links">
                                      <li><a title="Add to Wishlist" class="link-wishlist" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/wishlist.html"><span>Add to Wishlist</span></a></li>
                                      <li><a title="Add to Compare" class="link-compare" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/compare.html"><span>Add to Compare</span></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/quick_view.html"><span><span>Quick View</span></span></a> </div>
                              </div>
                              <div class="info">
                                <div class="info-inner">
                                  <div class="item-title"> <a title=" Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> Sample Product </a> </div>
                                  <!--item-title-->
                                  <div class="item-content">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:60%"></div>
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
                                <div class="actions">
                                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                </div>
                                <!--actions-->
                                
                                <div class="clearfix"> </div>
                              </div>
                            </div>
                          </div></div><div class="owl-item" style="width: 290px;"><div class="item">
                            <div class="col-item">
                              <div class="new-label new-top-right">New</div>
                              <div class="images-container"> <a class="product-image" title="Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> <img alt="a" class="img-responsive" src="./Inspire_product_files/product7.jpg"> </a>
                                <div class="actions">
                                  <div class="actions-inner">
                                    <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                    <ul class="add-to-links">
                                      <li><a title="Add to Wishlist" class="link-wishlist" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/wishlist.html"><span>Add to Wishlist</span></a></li>
                                      <li><a title="Add to Compare" class="link-compare" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/compare.html"><span>Add to Compare</span></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/quick_view.html"><span><span>Quick View</span></span></a> </div>
                              </div>
                              <div class="info">
                                <div class="info-inner">
                                  <div class="item-title"> <a title=" Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> Sample Product </a> </div>
                                  <!--item-title-->
                                  <div class="item-content">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:60%"></div>
                                      </div>
                                    </div>
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                                  </div>
                                  <!--item-content--> 
                                </div>
                                <!--info-inner-->
                                <div class="actions">
                                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                </div>
                                <!--actions-->
                                
                                <div class="clearfix"> </div>
                              </div>
                            </div>
                          </div></div><div class="owl-item" style="width: 290px;"><div class="item">
                            <div class="col-item">
                              <div class="sale-label sale-top-right">Sale</div>
                              <div class="images-container"> <a class="product-image" title="Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> <img alt="a" class="img-responsive" src="./Inspire_product_files/product8.jpg"> </a>
                                <div class="actions">
                                  <div class="actions-inner">
                                    <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                    <ul class="add-to-links">
                                      <li><a title="Add to Wishlist" class="link-wishlist" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/wishlist.html"><span>Add to Wishlist</span></a></li>
                                      <li><a title="Add to Compare" class="link-compare" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/compare.html"><span>Add to Compare</span></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/quick_view.html"><span><span>Quick View</span></span></a> </div>
                              </div>
                              <div class="info">
                                <div class="info-inner">
                                  <div class="item-title"> <a title=" Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> Sample Product </a> </div>
                                  <!--item-title-->
                                  <div class="item-content">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:0%"></div>
                                      </div>
                                    </div>
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                                  </div>
                                  <!--item-content--> 
                                </div>
                                <!--info-inner-->
                                <div class="actions">
                                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                </div>
                                <!--actions-->
                                
                                <div class="clearfix"> </div>
                              </div>
                            </div>
                          </div></div><div class="owl-item" style="width: 290px;"><div class="item">
                            <div class="col-item">
                              <div class="sale-label sale-top-right">Sale</div>
                              <div class="images-container"> <a class="product-image" title="Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> <img alt="a" class="img-responsive" src="./Inspire_product_files/product9.jpg"> </a>
                                <div class="actions">
                                  <div class="actions-inner">
                                    <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                    <ul class="add-to-links">
                                      <li><a title="Add to Wishlist" class="link-wishlist" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/wishlist.html"><span>Add to Wishlist</span></a></li>
                                      <li><a title="Add to Compare" class="link-compare" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/compare.html"><span>Add to Compare</span></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/quick_view.html"><span><span>Quick View</span></span></a> </div>
                              </div>
                              <div class="info">
                                <div class="info-inner">
                                  <div class="item-title"> <a title=" Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> Sample Product </a> </div>
                                  <!--item-title-->
                                  <div class="item-content">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:50%"></div>
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
                                <div class="actions">
                                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                </div>
                                <!--actions-->
                                
                                <div class="clearfix"> </div>
                              </div>
                            </div>
                          </div></div></div></div></div></div><div class="owl-item" style="width: 290px;"><div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><a class="flex-prev"></a></div><div class="owl-next"><a class="flex-next"></a></div></div></div></div></div></div>
                          <!-- End Item --> 
                          
                          <!-- Item -->
                          
                          <!-- End Item --> 
                          
                          <!-- Item -->
                          
                          <!-- End Item --> 
                          
                          <!-- Item -->
                          
                          <!-- End Item --> 
                          
                          <!-- Item -->
                          
                          <!-- End Item --> 
                          
                          <!-- Item -->
                          
                          <!-- End Item --> 
                          
                          <!-- Item -->
                          
                          <!-- End Item --> 
                          
                          <!-- Item -->
                          
                          <!-- End Item --> 
                          
                        <div class="owl-controls clickable" style="display: none;"><div class="owl-buttons"><div class="owl-prev"><a class="flex-prev"></a></div><div class="owl-next"><a class="flex-next"></a></div></div></div></div>
                      </div>
                    </div>
                  </div>
                  <div class="upsell-pro wow">
                    <div class="slider-items-products">
                      <div class="new_title center">
                        <h2>Upsell Products</h2>
                      </div>
                      <div id="upsell-products-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4 owl-carousel owl-theme" style="opacity: 1; display: block;"> 
                          
                          <!-- Item -->
                          <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 5800px; left: 0px; display: block;"><div class="owl-item" style="width: 290px;"><div class="owl-wrapper-outer"><div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 5800px; left: 0px; display: block;"><div class="owl-item" style="width: 290px;"><div class="item">
                            <div class="col-item">
                              <div class="sale-label sale-top-right">Sale</div>
                              <div class="images-container"> <a class="product-image" title="Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> <img src="./Inspire_product_files/product13.jpg" class="img-responsive" alt="a"> </a>
                                <div class="actions">
                                  <div class="actions-inner">
                                    <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                    <ul class="add-to-links">
                                      <li><a title="Add to Wishlist" class="link-wishlist" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/wishlist.html"><span>Add to Wishlist</span></a></li>
                                      <li><a title="Add to Compare" class="link-compare" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/compare.html"><span>Add to Compare</span></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/quick_view.html"><span><span>Quick View</span></span></a> </div>
                              </div>
                              <div class="info">
                                <div class="info-inner">
                                  <div class="item-title"> <a href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product_detail.html#l" title=" Sample Product"> Sample Product </a> </div>
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
                          </div></div><div class="owl-item" style="width: 290px;"><div class="item">
                            <div class="col-item">
                              <div class="new-label new-top-right">New</div>
                              <div class="images-container"> <a class="product-image" title="Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> <img src="./Inspire_product_files/product14.jpg" class="img-responsive" alt="a"> </a>
                                <div class="actions">
                                  <div class="actions-inner">
                                    <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                    <ul class="add-to-links">
                                      <li><a title="Add to Wishlist" class="link-wishlist" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/wishlist.html"><span>Add to Wishlist</span></a></li>
                                      <li><a title="Add to Compare" class="link-compare" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/compare.html"><span>Add to Compare</span></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/quick_view.html"><span><span>Quick View</span></span></a> </div>
                              </div>
                              <div class="info">
                                <div class="info-inner">
                                  <div class="item-title"> <a href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product_detail.html#l" title=" Sample Product"> Sample Product </a> </div>
                                  <!--item-title-->
                                  <div class="item-content">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div style="width:60%" class="rating"></div>
                                      </div>
                                    </div>
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                                  </div>
                                  <!--item-content--> 
                                </div>
                                <!--info-inner--> 
                                
                                <!--actions-->
                                
                                <div class="clearfix"> </div>
                              </div>
                            </div>
                          </div></div><div class="owl-item" style="width: 290px;"><div class="item">
                            <div class="col-item">
                              <div class="sale-label sale-top-right">Sale</div>
                              <div class="images-container"> <a class="product-image" title="Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> <img alt="a" class="img-responsive" src="./Inspire_product_files/product15.jpg"> </a>
                                <div class="actions">
                                  <div class="actions-inner">
                                    <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                    <ul class="add-to-links">
                                      <li><a title="Add to Wishlist" class="link-wishlist" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/wishlist.html"><span>Add to Wishlist</span></a></li>
                                      <li><a title="Add to Compare" class="link-compare" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/compare.html"><span>Add to Compare</span></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/quick_view.html"><span><span>Quick View</span></span></a> </div>
                              </div>
                              <div class="info">
                                <div class="info-inner">
                                  <div class="item-title"> <a title=" Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> Sample Product </a> </div>
                                  <!--item-title-->
                                  <div class="item-content">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:0%"></div>
                                      </div>
                                    </div>
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                                  </div>
                                  <!--item-content--> 
                                </div>
                                <!--info-inner-->
                                <div class="actions">
                                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                </div>
                                <!--actions-->
                                
                                <div class="clearfix"> </div>
                              </div>
                            </div>
                          </div></div><div class="owl-item" style="width: 290px;"><div class="item">
                            <div class="col-item">
                              <div class="sale-label sale-top-right">Sale</div>
                              <div class="images-container"> <a class="product-image" title="Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> <img alt="a" class="img-responsive" src="./Inspire_product_files/product16.jpg"> </a>
                                <div class="actions">
                                  <div class="actions-inner">
                                    <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                    <ul class="add-to-links">
                                      <li><a title="Add to Wishlist" class="link-wishlist" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/wishlist.html"><span>Add to Wishlist</span></a></li>
                                      <li><a title="Add to Compare" class="link-compare" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/compare.html"><span>Add to Compare</span></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/quick_view.html"><span><span>Quick View</span></span></a> </div>
                              </div>
                              <div class="info">
                                <div class="info-inner">
                                  <div class="item-title"> <a title=" Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> Sample Product </a> </div>
                                  <!--item-title-->
                                  <div class="item-content">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:50%"></div>
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
                                <div class="actions">
                                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                </div>
                                <!--actions-->
                                
                                <div class="clearfix"> </div>
                              </div>
                            </div>
                          </div></div><div class="owl-item" style="width: 290px;"><div class="item">
                            <div class="col-item">
                              <div class="sale-label sale-top-right">Sale</div>
                              <div class="images-container"> <a class="product-image" title="Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> <img alt="a" class="img-responsive" src="./Inspire_product_files/product17.jpg"> </a>
                                <div class="actions">
                                  <div class="actions-inner">
                                    <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                    <ul class="add-to-links">
                                      <li><a title="Add to Wishlist" class="link-wishlist" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/wishlist.html"><span>Add to Wishlist</span></a></li>
                                      <li><a title="Add to Compare" class="link-compare" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/compare.html"><span>Add to Compare</span></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/quick_view.html"><span><span>Quick View</span></span></a> </div>
                              </div>
                              <div class="info">
                                <div class="info-inner">
                                  <div class="item-title"> <a title=" Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> Sample Product </a> </div>
                                  <!--item-title-->
                                  <div class="item-content">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:60%"></div>
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
                                <div class="actions">
                                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                </div>
                                <!--actions-->
                                
                                <div class="clearfix"> </div>
                              </div>
                            </div>
                          </div></div><div class="owl-item" style="width: 290px;"><div class="item">
                            <div class="col-item">
                              <div class="new-label new-top-right">New</div>
                              <div class="images-container"> <a class="product-image" title="Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> <img alt="a" class="img-responsive" src="./Inspire_product_files/product18.jpg"> </a>
                                <div class="actions">
                                  <div class="actions-inner">
                                    <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                    <ul class="add-to-links">
                                      <li><a title="Add to Wishlist" class="link-wishlist" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/wishlist.html"><span>Add to Wishlist</span></a></li>
                                      <li><a title="Add to Compare" class="link-compare" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/compare.html"><span>Add to Compare</span></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/quick_view.html"><span><span>Quick View</span></span></a> </div>
                              </div>
                              <div class="info">
                                <div class="info-inner">
                                  <div class="item-title"> <a title=" Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> Sample Product </a> </div>
                                  <!--item-title-->
                                  <div class="item-content">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:60%"></div>
                                      </div>
                                    </div>
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                                  </div>
                                  <!--item-content--> 
                                </div>
                                <!--info-inner-->
                                <div class="actions">
                                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                </div>
                                <!--actions-->
                                
                                <div class="clearfix"> </div>
                              </div>
                            </div>
                          </div></div><div class="owl-item" style="width: 290px;"><div class="item">
                            <div class="col-item">
                              <div class="sale-label sale-top-right">Sale</div>
                              <div class="images-container"> <a class="product-image" title="Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> <img alt="a" class="img-responsive" src="./Inspire_product_files/product19.jpg"> </a>
                                <div class="actions">
                                  <div class="actions-inner">
                                    <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                    <ul class="add-to-links">
                                      <li><a title="Add to Wishlist" class="link-wishlist" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/wishlist.html"><span>Add to Wishlist</span></a></li>
                                      <li><a title="Add to Compare" class="link-compare" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/compare.html"><span>Add to Compare</span></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/quick_view.html"><span><span>Quick View</span></span></a> </div>
                              </div>
                              <div class="info">
                                <div class="info-inner">
                                  <div class="item-title"> <a title=" Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> Sample Product </a> </div>
                                  <!--item-title-->
                                  <div class="item-content">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:0%"></div>
                                      </div>
                                    </div>
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                                  </div>
                                  <!--item-content--> 
                                </div>
                                <!--info-inner-->
                                <div class="actions">
                                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                </div>
                                <!--actions-->
                                
                                <div class="clearfix"> </div>
                              </div>
                            </div>
                          </div></div><div class="owl-item" style="width: 290px;"><div class="item">
                            <div class="col-item">
                              <div class="sale-label sale-top-right">Sale</div>
                              <div class="images-container"> <a class="product-image" title="Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> <img alt="a" class="img-responsive" src="./Inspire_product_files/product20.jpg"> </a>
                                <div class="actions">
                                  <div class="actions-inner">
                                    <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                                    <ul class="add-to-links">
                                      <li><a title="Add to Wishlist" class="link-wishlist" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/wishlist.html"><span>Add to Wishlist</span></a></li>
                                      <li><a title="Add to Compare" class="link-compare" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/compare.html"><span>Add to Compare</span></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/quick_view.html"><span><span>Quick View</span></span></a> </div>
                              </div>
                              <div class="info">
                                <div class="info-inner">
                                  <div class="item-title"> <a title=" Sample Product" href="http://htmldemo.magikthemes.com/ecommerce/inspire-html-template/furniture/product-detail.html"> Sample Product </a> </div>
                                  <!--item-title-->
                                  <div class="item-content">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:50%"></div>
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
                                <div class="actions">
                                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                </div>
                                <!--actions-->
                                
                                <div class="clearfix"> </div>
                              </div>
                            </div>
                          </div></div></div></div></div></div><div class="owl-item" style="width: 290px;"><div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><a class="flex-prev"></a></div><div class="owl-next"><a class="flex-next"></a></div></div></div></div></div></div>
                          <!-- End Item --> 
                          
                          <!-- Item -->
                          
                          <!-- End Item --> 
                          
                          <!-- Item -->
                          
                          <!-- End Item --> 
                          
                          <!-- Item -->
                          
                          <!-- End Item --> 
                          
                          <!-- Item -->
                          
                          <!-- End Item --> 
                          
                          <!-- Item -->
                          
                          <!-- End Item --> 
                          
                          <!-- Item -->
                          
                          <!-- End Item --> 
                          
                          <!-- Item -->
                          
                          <!-- End Item --> 
                          
                        <div class="owl-controls clickable" style="display: none;"><div class="owl-buttons"><div class="owl-prev"><a class="flex-prev"></a></div><div class="owl-next"><a class="flex-next"></a></div></div></div></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>