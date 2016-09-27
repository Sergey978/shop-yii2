<?php

namespace app\controllers;

use app\models\GadgetsFilterForm;
use Yii;
use yii\easyii\modules\catalog\api\Catalog;
use yii\web\NotFoundHttpException;
use yii\data\Pagination;

class ShopController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCat($slug)
    {
        $filterForm = new GadgetsFilterForm();
        $cat = Catalog::cat($slug);

        if(!$cat){
            throw new NotFoundHttpException('Shop category not found.');
        }
        $filters = null;
        if($filterForm->load(Yii::$app->request->get()) && $filterForm->validate()) {
            $filters = $filterForm->parse();
        }

        return $this->render('cat', [
            'cat' => $cat,
            'items' => $cat->items([
                'pagination' => ['pageSize' => 2],
                'filters' => $filters
            ]),
            'filterForm' => $filterForm
        ]);
    }

    public function actionSearch($text)
    {
        $text = filter_var($text, FILTER_SANITIZE_STRING);
        

        $items = Catalog::items([
                'where' => ['or', ['like', 'title', $text], ['like', 'description', $text]],
                'pagination' => ['pageSize' => 5,],
            ]);
        
        $pages = new Pagination([ 'totalCount' => count($items), 'pageSize' => 5, ]);
        return $this->render('search', [
            'text' => $text,
            'items' => $items,
            'pages' => $pages ,
            
        ]);
    }

    public function actionView($slug)
    {
        $item = Catalog::get($slug);
        if(!$item){
            throw new NotFoundHttpException('Item not found.');
        }

        return $this->render('view2', [
            'item' => $item,
            'addToCartForm' => new \app\models\AddToCartForm()
        ]);
    }
    
    public function actionList()
    {
        return $this->render('list');
    }
}
