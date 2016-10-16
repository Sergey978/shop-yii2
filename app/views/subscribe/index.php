<?php
use yii\easyii\modules\subscribe\api\Subscribe;
use yii\easyii\modules\page\api\Page;


?>
<h1>Подписка</h1>


<div class="row">
    <div class="col-md-8">
        <?= $page->text ?>
    </div>
    <div class="col-md-4">
        <?php if(Yii::$app->request->get(Subscribe::SENT_VAR)) : ?>
            <h4 class="text-success"><i class="glyphicon glyphicon-ok"></i> Вы подписаны</h4>
        <?php else : ?>
            <div class="well well-sm">
                <H2>Подписаться.</H2>
                <?= Subscribe::form() ?>
            </div>
        <?php endif; ?>
    </div>
</div>

