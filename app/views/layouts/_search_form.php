<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<?= Html::beginForm(Url::to(['/shop/search']), 'get', ['class' => 'form-inline']) ?>
     <div class="input-group"> 
            <?= Html::textInput('text', $text, 
            ['class' => 'form-control search-form input-sm', 
                'placeholder' => 'Поиск']) ?>
         <span class="input-group-btn">     
            <?= Html::submitButton('<i class="glyphicon glyphicon-search"></i>', 
            ['class' => 'btn btn-default search-btn btn-sm']) ?>
         </span> 
     </div>    
<?= Html::endForm() ?>
