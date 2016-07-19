<?php
use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\file\api\File;
use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;




$page = Page::get('page-custom');

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = $page->model->title;

function renderNode($node){
    if(!count($node->children)){
        $html = '<li>'.Html::a($node->title, ['/shop/cat', 'slug' => $node->slug]).'</li>';
    } else {
        $html = '<li>'.$node->title.'</li>';
        $html .= '<ul>';
        foreach($node->children as $child) $html .= renderNode($child);
        $html .= '</ul>';
    }
    return $html;
}
?>
<?php
function renderCategory($node, $customCategory){
    
    if ($node->slug == 'category'){
         if(!count($node->children)){      
               
                    } else {
                               foreach($node->children as $child) {
                                   
                               // echo  Html::img($child->thumb(120, 240));
                                  echo  $child->title.'<br>';
                                echo HTML::img($child->image).'<br>' ;
                                   renderCategory($child, $customCategory);
                               } 

                    }
     }
    
 
}
?>



<div class="row">
    <div class="col-md-8">
        <h1>
            <?= $page->seo('h1', $page->title) ?>
           
        </h1>
        <br/>
        <ul>
          
           
           <?php 
          // echo $custom;
         foreach(Catalog::tree() as $node) echo renderCategory($node, $customCategory);
         
         
         //Html::img($item->thumb(120, 240))
           
           ?>
        </ul>
    </div>
    <div class="col-md-4">
        <?= $this->render('_search_form', ['text' => '']) ?>

        <h4>Last items</h4>
        <?php foreach(Catalog::last(3) as $item) : ?>
            <p>
                <?= Html::img($item->thumb(30)) ?>
                <?= Html::a($item->title, ['/shop/view', 'slug' => $item->slug]) ?><br/>
                <span class="label label-warning"><?= $item->price ?>$</span>
            </p>
        <?php endforeach; ?>
    </div>
</div>

