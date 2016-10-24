<?php
use yii\easyii\modules\article\api\Article;
use yii\easyii\modules\carousel\api\Carousel;
use yii\easyii\modules\gallery\api\Gallery;
use yii\easyii\modules\guestbook\api\Guestbook;
use yii\easyii\modules\news\api\News;
use yii\easyii\modules\page\api\Page;
use yii\easyii\modules\text\api\Text;
use yii\helpers\Html;
use yii\easyii\modules\subscribe\api\Subscribe;

Yii::$app->formatter->locale = 'ru-RU';

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
    <h2>5 преимуществ Lerox Cosmetics:</h2>
    </br>
    <ul  class = "row" id="nav-shadow" style="min-height: 180px"  >
         
       <?php foreach(Gallery::last(5) as $photo) : ?>
        
    <li class="col15-lg-3 col15-md-3 col15-sm-3 col15-xs-3" >
                      
                            <?= Html::a(Html::img($photo->image,[
                                
                                'class' => 'img-rounded img-responsive',
                                'title' => $photo->description,
                                'data-toggle'=>'tooltip',
                                'data-placement' => 'bottom',
                                ]), 
                                ['/page/about', ]);
                            ?>
       
                    
            </li> 
            
         <?php endforeach; ?>
         
        </ul>
    

</div>

<hr/>
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
                     
                    <?=Yii::$app->formatter->asDate($new->model->time,'php:m.d. Y');?>
                      </br>
                     <b><?= Html::a($new->title, ['news/view', 'slug' => $new->slug]) ?></b>
                   <br/>
                    <?= $new->short ?>
                   
                    
                 </blockquote>
            </div>   
        </div> 
    </br>
   <? endforeach;?> 
</div>

<br/>
<hr/>


<div class="text-center">
    <h2>Блог </h2>
    <br/>
    <? $newArticles = Article::last(3, ['category_id' => '5']);?>
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
                   <b> <?= Html::a($newArt->title, ['articles/view', 'slug' => $newArt->slug]) ?></b>
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

<div class="text-center">
    <?php if(Yii::$app->request->get(Subscribe::SENT_VAR)) : ?>
            <h4 class="text-success"><i class="glyphicon glyphicon-ok"></i> Вы подписаны</h4>
        <?php else : ?>
            <div class="well subscribe">
                <H3>Будьте с нами!</H3>
                <?= Subscribe::form() ?>
            </div>
        <?php endif; ?>
    
</div>

<br/>
