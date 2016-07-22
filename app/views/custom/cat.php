<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\easyii\modules\catalog\api\Catalog;

//$this->title = $cat->seo('title', $cat->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Shop', 'url' => ['shop/index']];
$this->params['breadcrumbs'][] = $cat->model->title;
?>


<div class="row">
<?php if(count($categories)): ?>
            
<?php foreach ($categories as $category)  : ?>   
    <h2><?=$category->title.': Выберите основу';?> </h2>
     <?php if(count($categories)): ?>
    <div>
        
                <?php foreach ($items[$category->slug] as $item)  : ?> 
                
      <div class = "base1">
          <?= $this->render('_base', ['item' => $item]) ?>
       </div>
        
                    <?php endforeach; ?> 
    </div>
                  <?php endif; ?>  
                <?php endforeach; ?>
              <?php else : ?>
                <p>Здесь ничего нет</p>
            <?php endif; ?>
</div>   