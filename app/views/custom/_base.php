<?php 
use yii\helpers\Html; 
use yii\easyii\modules\catalog\api\Catalog;
?>
<div class="row">
    <div class="col-md-2">
      
    </div>
    <div class="col-md-10">
        
        
      <?php  $items = Catalog::items(['where'=>['category_id'=>$categoryId]]); ?>
        
         <?php if(count($items)) : ?>
            <br/>
            <?php foreach($items as $item) : ?>
                 <p><?= Html::a($item->title, ['shop/view', 'slug' => $item->slug]) ?></p>
            <?php endforeach; ?>
        <?php else : ?>
            <p>items none</p>
        <?php endif; ?>
        
       
        <p>
            
        </p>
        
    </div>
</div>
<br>