<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\easyii\modules\catalog\api\Catalog;



$this->title = $cat->seo('title', $cat->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Выбор Категории', 'url' => ['custom/index']];
$this->params['breadcrumbs'][] = $cat->model->title;
?>


     
   <div class="col-main  col-sm-push-3 wow">    

     
    <ul class="products-grid">
         
        <?php if(count($categories)): ?>
            
    <?php foreach ($categories as $category)  : ?>   
        <h3><?=$category->title.': Выберите основу';?> </h3>
            
        <div class="row" > 
            <?php if(count($categories)): ?>
                <?php foreach ($items[$category->slug] as $item)  : ?>
                    <?= $this->render('base2', ['item' => $item]) ?>
                        <?php endforeach; ?>
                            <?php endif; ?>
               
        </div>  
    <?php endforeach; ?>
<?php else : ?>
    <p>Здесь ничего нет</p>
<?php endif; ?>
      
  
    </ul>
    
   </div>

    
    
 
       
       
       
        
        
   