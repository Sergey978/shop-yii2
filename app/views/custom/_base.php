<?php 
use yii\helpers\Html; 
use yii\easyii\modules\catalog\api\Catalog;
?>

        
        <p><?= $item->title ?></p>
        <?php   $item = Catalog::get( $item->slug ) ?>
         <?= Html::img($item->thumb(220, 0, false));?>
       
  