<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $cat->seo('title', $cat->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => ['articles/index']];
$this->params['breadcrumbs'][] = $cat->model->title;
?>
<h1><?= $cat->seo('h1', $cat->title) ?></h1>
<br/>

<?php if(count($items)) : ?>
   
        
        <?  foreach ($items as $article): ?>
        <div class="row text-left">
            <div class="col-md-2 col-sm-2 col-xs-4">
                <?= Html::img($article->image,[
                 'class' => 'img-rounded img-responsive',
                 'width'=>'160px',
                 'height'=>'auto',
                 ]) 
                ?>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-8">
                 <blockquote class="text-left">
                     
                     <b><?= Html::a($article->title, ['articles/view', 'slug' => $article->slug]) ?></b>
                   <br/>
                    <?= $article->short ?>
                   
                    
                 </blockquote>
                <p>
                    <?php foreach($article->tags as $tag) : ?>
                        <a href="<?= Url::to(['/articles/cat', 'slug' => $article->cat->slug, 'tag' => $tag]) ?>" class="label label-info"><?= $tag ?></a>
                    <?php endforeach; ?>
                </p>
            </div>   
        </div> 
    </br>
    <?php endforeach; ?>
<?php else : ?>
    <p>Category is empty</p>
<?php endif; ?>

<?= $cat->pages() ?>