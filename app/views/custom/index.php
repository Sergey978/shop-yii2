<?php
use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\file\api\File;
use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;




$page = Page::get('page-custom');

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = $page->model->title;


?>

<div class="row">
    <div class="col-md-8">
        <h1>
            <?= $page->seo('h1', $page->title) ?>
           
        </h1>
        <br/>
        <ul>
          
           
           <?php 
           foreach ($categories as $category){
            
               echo  Html::a(Html::img($category->image,[
                   'alt' =>$category->title,
                   'class' => 'img-rounded',
                   'width'=>'220',
                   'height'=>'auto',
                   
                   ]), ['/custom/cat', 'slug' => $category->slug]);
               
           }
         
         //print_r($categories);
         //Html::img($item->thumb(120, 240))
           
           ?>
        </ul>
    </div>
    <div class="col-md-4">
        <?= $this->render('_search_form', ['text' => '']) ?>

        <h4>Last items</h4>
        <?php foreach(Catalog::last(3) as $item) : ?>
            <p>
                <?= Html::img($item->thumb(30)) ?>
                <?= Html::a($item->title, ['/shop/view', 'slug' => $item->slug]) ?><br/>
                <span class="label label-warning"><?= $item->price ?>$</span>
            </p>
        <?php endforeach; ?>
    </div>
</div>

