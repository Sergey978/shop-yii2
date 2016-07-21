<?php 
use yii\helpers\Html; 
use yii\easyii\modules\catalog\api\Catalog;
?>
<div class="row">
    <div class="col-md-2">
      
    </div>
    <div class="col-md-10">
        
        
        <h4><?= $item->title ?></h4>
        <?php   $item =Catalog::get( $item->slug ) ?>
         <?= Html::img($item->thumb(220, 0, false));?>
       
    </div>
</div>
<br>