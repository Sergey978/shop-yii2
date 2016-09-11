<?php
use yii\easyii\modules\article\api\Article;
use yii\easyii\modules\carousel\api\Carousel;
use yii\easyii\modules\gallery\api\Gallery;
use yii\easyii\modules\guestbook\api\Guestbook;
use yii\easyii\modules\news\api\News;
use yii\easyii\modules\page\api\Page;
use yii\easyii\modules\text\api\Text;
use yii\helpers\Html;

$page = Page::get('page-index');

$this->title = $page->seo('title', $page->model->title);
?>

<?= Carousel::widget(1140, 520) ?>

<div class="text-center">
    <h1><?= Text::get('index-welcome-title') ?></h1>
    <p><?= $page->text ?></p>
</div>

<br/>
<hr/>



<div class="text-center">
    <h2>Скачущие картинки</h2>
    </br>
    <ul  class = "row" id="nav-shadow" style="min-height: 160px"  >
         
       <?php foreach(Gallery::last(5) as $photo) : ?>
        
    <li class="col15-lg-3 col15-md-3 col15-sm-3 col15-xs-3" >
                      
                            <?= Html::a(Html::img($photo->image,[
                                
                                'class' => 'img-rounded img-responsive',
                                'title' => $photo->description,
                                'data-toggle'=>'tooltip',
                                'data-placement' => 'bottom',
                                'min-h'

                                ]), ['/custom/cat', 'slug' => $category->slug]);
                            ?>
       
                    
            </li> 
            
         <?php endforeach; ?>
         
        </ul>
    
    

</div>


<div class="text-center">
    <h2>Последние новости</h2>
     <? $news = News::last(3);?>
    <?     foreach ($news as $new): ?>
        <div class="row text-left">
            <div class="col-md-2 col-sm-2 col-xs-4">
                <?= Html::img($new->image,[
                 'class' => 'img-rounded img-responsive',
                 'width'=>'160px',
                 'height'=>'auto',
                 ]) 
                ?>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-8">
                 <blockquote class="text-left"> 
                    <b><?= Html::a($new->title, ['news/view', 'slug' => $new->slug]) ?></b>
                   
                    <?= $new->short ?>
                     </br> </br>
                    <?='Дата: '.$new->date?>
                 </blockquote>
            </div>   
        </div> 
    </br>
   <? endforeach;?> 
</div>

<br/>
<hr/>


<div class="text-center">
    <h2>Новинки </h2>
    <br/>
    <? $newArticles = Article::last(3, ['category_id' => '1']);?>
    <? foreach ($newArticles as $newArt): ?>
        <div class="row text-left">
            <div class="col-md-2 col-sm-2 col-xs-4">
                <?= Html::img($newArt->image,[
                 'class' => 'img-rounded img-responsive',
                 'width'=>'160px',
                 'height'=>'auto',
                 ]) 
                ?>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-8">
                 <blockquote class="text-left"> 
                   <b> <?= Html::a($newArt->title, ['news/view', 'slug' => $newArt->slug]) ?></b>
                    </br>
                    <?= $newArt->short ?>
                 </blockquote>
            </div>   
        </div> 
    </br>
   <? endforeach;?> 
</div>

<br/>
<hr/>



<br/>
