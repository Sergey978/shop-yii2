<?php
use yii\easyii\modules\page\api\Page;

$page = Page::get('page-contacts');
?>
<h2><?= $page->title;?></h2>

<?= $page->text;?>


