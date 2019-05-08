<?php 

namespace app\controllers;

use yii\web\Controller;

class RedditController extends Controller{

  public function actionIndex(){

    return $this->render('index', [
      'title' => 'First Post',
      'content' => 'dsfgsgféag lgfgslfg',
      'creator' => 'Test Creator',
      'votes' => '',
    ]);    
  }

  public function actionSubmit(){

    return $this->render('submit', [
      
    ])
  }

}
?>