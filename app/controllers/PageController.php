<?php

namespace app\controllers;

class PageController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionAbout(){
         return $this->render('about');
    }
    
    public function actionDelivery(){
         return $this->render('delivery');
    }
    
    public function actionContacts(){
         return $this->render('contacts');
    }
    
    public function actionShops(){
         return $this->render('shops');
    }
            

}