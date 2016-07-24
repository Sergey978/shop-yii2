<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\easyii\modules\catalog\api\Catalog;

//$this->title = $cat->seo('title', $cat->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Выбор основы', 'url' => ['custom/index']];
$this->params['breadcrumbs'][] = $cat->model->title;
?>



<?php if(count($categories)): ?>
            
    <?php foreach ($categories as $category)  : ?>   
        <h3><?=$category->title.': Выберите основу';?> </h3>
            <div class="container">
                <div class="row" >
            <?php if(count($categories)): ?>
                <?php foreach ($items[$category->slug] as $item)  : ?>
                    <?= $this->render('_base', ['item' => $item]) ?>
                        <?php endforeach; ?>
                            <?php endif; ?>
                </div>
            </div>
    <?php endforeach; ?>
<?php else : ?>
    <p>Здесь ничего нет</p>
<?php endif; ?>
  


       
           
       
       
       
        
        
   