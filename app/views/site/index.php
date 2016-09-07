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
    <h2>Наши фото</h2>
    <br/>
    <?php foreach(Gallery::last(6) as $photo) : ?>
        <?= $photo->box(180, 135) ?>
    <?php endforeach;?>
    <?php Gallery::plugin() ?>
</div>

<br/>
<hr/>

<div class="text-center">
    <h2>Последние новости</h2>
     <? $news = News::last(3);?>
    <?     foreach ($news as $new): ?>
        <div class="row text-left">
            <div class="col-md-2">
                <?= Html::img($new->image,[
                 'class' => 'img-rounded',
                 'width'=>'160px',
                 'height'=>'auto',
                 ]) 
                ?>
            </div>
            <div class="col-md-10">
                 <blockquote class="text-left"> 
                    <?= Html::a($new->title, ['news/view', 'slug' => $new->slug]) ?>
                    </br>
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
    <h2>Новинки </h2>
    <br/>
    <? $newArticles = Article::last(3, ['category_id' => '1']);?>
    <? foreach ($newArticles as $newArt): ?>
        <div class="row text-left">
            <div class="col-md-2">
                <?= Html::img($newArt->image,[
                 'class' => 'img-rounded',
                 'width'=>'160px',
                 'height'=>'auto',
                 ]) 
                ?>
            </div>
            <div class="col-md-10">
                 <blockquote class="text-left"> 
                    <?= Html::a($newArt->title, ['news/view', 'slug' => $newArt->slug]) ?>
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
    <h2>Отзывы наших пользователей</h2>
    <br/>
    <div class="row text-left">
        <?php foreach(Guestbook::last(2) as $post) : ?>
            <div class="col-md-6">
                <b><?= $post->name ?></b>
                <p class="text-muted"><?= $post->text ?></p>
            </div>
        <?php endforeach;?>
    </div>
</div>

<br/>
