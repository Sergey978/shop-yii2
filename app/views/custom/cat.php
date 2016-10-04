<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\page\api\Page;

$asset = \app\assets\AppAsset::register($this);
$page = Page::get('page-custom');

$this->title = $cat->seo('title', $cat->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Выбор Категории', 'url' => ['custom/index']];
$this->params['breadcrumbs'][] = $cat->model->title;
?>

<?=  Html::img($asset->baseUrl."/images/steps/step2.jpg",[
                                                'alt' => 'Шаг 2',
                                                'style' =>'width: 60%',
                                                ]);?>

     
  <div class="panel-group" id="accordion"> <!-- accordion 1 --> 

     
   
         
        <?php if(count($categories)): ?>
    <? $classPanel = 0; ?>        
    <?php foreach ($categories as $category)  : ?> 
      
      <? $classPanel++;?>
      <? switch($classPanel % 4){
            case 0:
               $classPanelName = "panel-primary" ;
                break;
            case 1:
                $classPanelName = "panel-success";
                break;
            case 2:
                $classPanelName = "panel-warning";
                break;
            case 3:
                $classPanelName = "panel-info";
                break;
        }
       ?>
      
      
        <div class="panel <?=$classPanelName?>">
             <div class="panel-heading"> <!-- panel-heading -->
                 <div class="panel-title"> <!-- title 1 -->
                     <a data-toggle="collapse" data-parent="#accordion" href="#<?=$category->slug?>">
                         <div class="row">
                              <div class="col-md-2 col-sm-2 col-xs-4">
                            <?=  Html::img($category->image,[
                                                'alt' =>$category->title,
                                                'class' => 'img-responsive img-rounded',
                                                'style' =>'width: 60px',

                                                ]);?>
                                  
                              </div>
                             <div class="col-md-10 col-sm-10 col-xs-8">
                                  <h2> <?=$category->title.': Выберите основу';?></h2>
                             </div>
                        </div> 
                         
                  </a>
                 </div>
             </div>
            
            <!-- panel body -->
             <div id="<?=$category->slug?>" class="panel-collapse collapse " > 
                  <div class="panel-body">
                    <?php if(count($items[$category->slug]) > 0): ?>
                        <?php foreach ($items[$category->slug] as $item)  : ?>
                            <?= $this->render('base2', ['item' => $item]) ?>
                        <?php endforeach; ?>
                      
                      <?php else  : ?>
                            <p>Здесь ничего нет...</p>
                          
                          
                         
                          
                    
                    <?php endif; ?>
                  </div>  

             </div>  
          
        </div>    
    <?php endforeach; ?>
      
<?php else : ?>
    <p>Здесь ничего нет</p>
<?php endif; ?>
      
  
   </div>

    <h1><?= $page->title ?></h1>
    <p><?= $page->text ?></p>
    
 
       
       
       
        
        
   