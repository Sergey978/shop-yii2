<?php
use yii\helpers\Html;
$asset = \app\assets\AppAsset::register($this);

?>
<section class="content-wrapper">
    <div class="container">
      <div class="std">
        <div class="page-not-found">
          <h2>404</h2>
          <h3><img src="<?= $asset->baseUrl ?>/images/signal.png">Ой всё ! Запрошенная страница не найдена!</h3>
          <div><a href="/index" type="button" class="btn-home"><span>Вернуться на главную</span></a></div>
        </div>
      </div>
    </div>
  </section>