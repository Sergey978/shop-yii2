<?php
use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\file\api\File;
use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;

$asset = \app\assets\AppAsset::register($this);

$page = Page::get('page-custom');

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = $page->model->title;


?>


<?=  Html::img($asset->baseUrl."/images/steps/step1.jpg",[
                                                'alt' => 'Шаг 1',
                                                'style' =>'width: 60%',
                                                ]);?>


        <h1>
            <?= $page->seo('h1', $page->title) ?>
           
        </h1>
        <br/>
        <ul class = 'row'>
         
        <?php     foreach ($categories as $cat) : ?>
            <? $category =  Catalog::cat( $cat->slug ); ?> 
            <li class="item col-lg-3 col-md-4 col-sm-4 col-xs-6">
                <div class="col-item">
               
                  <div class="images-container"> 
                      <div class="cat">
                            
                            <?= Html::a(Html::img($category->image,[
                                'alt' =>$category->title,
                                'class' => 'img-rounded img-responsive',
                                'title' => $category->seo('description'),
                                'data-toggle'=>'tooltip',
                                'data-placement' => 'bottom',
                               

                                ]), ['/custom/cat', 'slug' => $category->slug]);
                            ?>
       
                     </div>
                   </div>
                </div>   
            </li>   
         <?php endforeach; ?>
         
        </ul>
   
    <hr/>
        
    
    <h1><?= $page->title ?></h1>
    <p><?= $page->text ?></p>
   