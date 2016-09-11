<?php
use yii\easyii\modules\page\api\Page;

$page = Page::get('page-delivery');

?>
<h2><?= $page->title;?></h2>

<?= $page->text;?>
