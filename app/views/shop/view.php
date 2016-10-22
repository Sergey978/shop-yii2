<?php
use app\models\AddToCartForm;
use yii\easyii\modules\catalog\api\Catalog;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = $item->seo('title', $item->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Shop', 'url' => ['shop/index']];
$this->params['breadcrumbs'][] = ['label' => $item->cat->title, 'url' => ['shop/cat', 'slug' => $item->cat->slug]];
$this->params['breadcrumbs'][] = $item->model->title;


?>
<h1><?= $item->seo('h1', $item->title) ?></h1>

<div class="row">
    <div class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
        <br/>
        
        
                      <div class="col-item">

                        <div class="images-container"> 
                             <?=  Html::img($item->image,[
                                          'alt' =>$item->title,
                                          'class' => 'img-responsive center-block img-thumbnail',
                                          'overflow'=>'visible',
                                          ]);?>
                           
                        </div>
                      </div>
             
        <?php if(count($item->photos)) : ?>
            <br/><br/>
            <div>
                <?php foreach($item->photos as $photo) : ?>
                    <?= $photo->box(null, 100) ?>
                <?php endforeach;?>
                <?php Catalog::plugin() ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-8">
                <h2>
                    <span class="label label-warning"><?= number_format($item->price, 2, ',', '') ?>грн.</span>
                    <?php if($item->discount) : ?>
                        <del class="small"><?= $item->oldPrice ?></del>
                    <?php endif; ?>
                </h2>
                <h3>Описание </h3>
                  <?= $item->description ?>
                
                <?php if(!empty($item->data->features)) : ?>
                    <br/>
                    <span class="text-muted">Features:</span> <?= implode(', ', $item->data->features) ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <?php if(Yii::$app->request->get(AddToCartForm::SUCCESS_VAR)) : ?>
                    <h4 class="text-success"><i class="glyphicon glyphicon-ok"></i> Товар в корзине</h4>
                <?php elseif($item->available) : ?>
                    <br/>
                    <div class="well well-sm">
                        <?php $form = ActiveForm::begin(['action' => Url::to(['/shopcart/add', 'id' => $item->id])]); ?>
                       
                        <?= $form->field($addToCartForm, 'count') ?>
                        <?= Html::submitButton('В корзину', ['class' => 'btn btn-warning']) ?>
                        <?php ActiveForm::end(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
      
    </div>
</div>