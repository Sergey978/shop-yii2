<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

//$this->title = $cat->seo('title', $cat->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Shop', 'url' => ['shop/index']];
$this->params['breadcrumbs'][] = $cat->model->title;
?>
<h1></h1>
<br/>

<div class="row">
    <div class="col-md-8">
        <?php if(count($categories)) : ?>
            <br/>
            <?php foreach($categories as $item) : ?>
                <?= $item->slug ?>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Category is empty</p>
        <?php endif; ?>
    </div>
   
</div>



