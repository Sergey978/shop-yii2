<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\easyii\modules\catalog\api\Catalog;

//$this->title = $cat->seo('title', $cat->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Shop', 'url' => ['shop/index']];
$this->params['breadcrumbs'][] = $cat->model->title;
?>
<h1></h1>
<br/>

<div class="row">
    <div class="col-md-8">
   
         <br/>
            <?php if(count($categories)): ?>
            
                <?php foreach ($categories as $category)  : ?>   
         <h2><?=$category->title.'<br>';?> </h2>
                    <?php if(count($categories)): ?>
                        <?php foreach ($items[$category->slug] as $item)  : ?> 
                        <?= $this->render('_base', ['item' => $item]) ?>
                    <?php endforeach; ?> 
                  <?php endif; ?>  
                <?php endforeach; ?>
              <?php else : ?>
                <p>Здесь ничего нет</p>
            <?php endif; ?>
             
             
              
     
    </div>
   
</div>



