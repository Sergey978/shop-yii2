<?php
use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\file\api\File;
use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;




$page = Page::get('page-ingridients');

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = $page->model->title;


?>

 <h1>  <?= $page->seo('h1', $page->title) ?> </h1>
    <div class="row">  
     
        <div class="col-md-8">    
          <div class="row">
            <?php   foreach ($ingridients as $ingridient) : ?>
            
           
                   <div class="col-md-4 text-center "> 
                         <h4><?=$ingridient->title?></h4>
                            <?= Html::a(Html::img($ingridient->image,[
                                           'alt' =>$ingridient->title,
                                           'class' => 'img-rounded',
                                           'width'=>'140',
                                           'height'=>'auto',

                                           ]), 
                                            ['/custom/cat', 'slug' => $category->slug]);

                             ?>
               
             
             
             
            
              <p><?=$ingridient->price?></p>
              
             </div>
             
               
               
             
          
         
         <?php endforeach; ?>
       </div>  
      </div>
        
        
         <div class="col-md-4">
             <div align = 'center'>
                 <h4><?=$baseItem->title?></h4>
        <?= Html::img($baseItem->image,[
                                    'alt' =>$baseItem->title,
                                    'class' => 'img-rounded',
                                    'title' => $baseItem->description,
                                    'width'=>'180',
                                    'height'=>'auto',
                                    'data-toggle'=>'tooltip',
                                    ]) ?> 
            </div>
        <h4>Ингридиенты</h4>
        <?php foreach(Catalog::last(3) as $item) : ?>
            <p>
                <?= Html::img($item->thumb(30)) ?>
                <?= Html::a($item->title, ['/shop/view', 'slug' => $item->slug]) ?><br/>
                <span class="label label-warning"><?= $item->price ?>$</span>
            </p>
        <?php endforeach; ?>
        </div>
        
   </div>         
    
                   
                
        
           
        
     

