<?php
use yii\easyii\modules\page\api\Page;
use yii\easyii\modules\shopcart\api\Shopcart;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\easyii\modules\catalog\api\Catalog;

$page = Page::get('page-shopcart');

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = $page->model->title;
?>
<h1><?= $page->seo('h1', $page->title) ?></h1>

<br/>

<?php if(count($goods)) : ?>
    <div class="row">
        <div class="col-md-6">
            <?= Html::beginForm(['/shopcart/update'])?>
            <table class="table">
                <thead>
                <tr>
                    <th>Item</th>
                    <th width="100">Количество</th>
                    <th width="120">Цена за 1 шт.</th>
                    <th width="100">Всего</th>
                    <th width="30"></th>
                </tr>
                </thead>
                <tbody>
                    <? $summCostAllIngredients = 0; ?>
                    <?php foreach($goods as $good) : ?>
                    <tr>
                        <td>
                            
                            <?= Html::a($good->item->title, ['/shop/view', 'slug' => $good->item->slug]) ?><br>
                              <? $ingridients = explode ('|',$good->options)?>
                            <?  $summCostIngredients = 0;?>     
                          <? if (Catalog::get($ingridients [0])):?>  
                          <?=' Цена '. number_format($good->price, 2, ',', ''). 'грн.'?> 
                            <h5>Ингредиенты</h5>
                                <? foreach ($ingridients as $ingridient) :?>
                                <? $component = yii\easyii\modules\catalog\api\Catalog::get($ingridient); ?>
                              
                                        <?= '&emsp;'.$component->title.' <br> '.'цена - '.number_format($component->price, 2, ',', '').' грн.' ?><br>
                                        <? $summCostIngredients+=$component->price; ?>
                               
                              <? endforeach;?>
                                        
                              <? else :?>   
                                        
                                  
                                  <?= $good->options ? "($good->options)" : '' ?>
                            
                            <?   endif; ?>
                                                     
                        </td>
                        <td><?= Html::textInput("Good[$good->id]", $good->count, ['class' => 'form-control input-sm']) ?></td>
                        <td>
                            <?php if($good->discount) : ?>
                                <del class="text-muted "><small><?= $good->item->oldPrice ?></small></del>
                            <?php endif; ?>
                            <?= number_format($good->price  + $summCostIngredients, 2, ',', '')?>
                        </td>
                        <td><?= number_format(($good->price + $summCostIngredients)* $good->count, 2, ',', '') ?></td>
                        <th><?= Html::a('<i class="glyphicon glyphicon-trash text-danger"></i>', ['/shopcart/remove', 'id' => $good->id], ['title' => 'Удалить товар']) ?></th>
                    </tr>
                     <? number_format($summCostAllIngredients += $summCostIngredients * $good->count, 2, ',', ''); ?>
                <?php endforeach; ?>
                <tr>
                    <td colspan="5" class="text-right">
                        <h3>Всего: <?=number_format(Shopcart::cost() + $summCostAllIngredients, 2, ',', '') .' '?>грн.</h3>
                    </td>
                </tr>
                </tbody>
            </table>
            <?= Html::submitButton('<i class="glyphicon glyphicon-refresh"></i> Пересчитать', ['class' => 'btn btn-default pull-right']) ?>
           
            <?= Html::endForm()?>
           
        </div>
         
        <div class="col-md-4 col-md-offset-2">
            <h4>Оформление заказа:</h4>
            <div class="well well">
                <?= Shopcart::form(['successUrl' => Url::to('/shopcart/success')])?>
            </div>
        </div>
    </div>
<hr>
<?php else : ?>
    <p>Корзина пуста</p>
<?php endif; ?>
