<?php
use yii\easyii\modules\page\api\Page;

$page = Page::get('page-shops');

?>
<h2><?= $page->title;?></h2>

<?= $page->text;?>