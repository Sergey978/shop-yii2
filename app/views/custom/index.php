<?php
use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\file\api\File;
use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;




$page = Page::get('page-custom');

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = $page->model->title;


?>


        <h1>
            <?= $page->seo('h1', $page->title) ?>
           
        </h1>
        <br/>
        <ul class = 'row'>
         
        <?php     foreach ($categories as $c) : ?>
            <? $category =  Catalog::cat( $c->slug ); ?> 
            <li class="item col-lg-3 col-md-4 col-sm-4 col-xs-6">
                <div class="col-item">
               
                  <div class="images-container"> 
                                <?= $category->seo('title'); ?>   
                            <?= Html::a(Html::img($category->image,[
                                'alt' =>$category->title,
                                'class' => 'img-rounded img-responsive',
                                'width'=>'174',
                                'height'=>'auto',

                                ]), ['/custom/cat', 'slug' => $category->slug]);
                            ?>
       
                      <br>
                      <br>
       
                   
                      
                   </div>
                </div>   
            </li>   
         <?php endforeach; ?>
         
        </ul>
  