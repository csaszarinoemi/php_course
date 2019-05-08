<?php 

namespace app\controllers;

use yii\web\Controller;
use app\models\PostForm;
use app\models\Post;

class RedditController extends Controller{

  public function actionIndex(){
    $posts = Post::find()
            ->all();

    return $this->render('index', [
      'posts'=>$posts
    ]);    
  }

  public function actionSubmit(){

    return $this->render('submit', [
      'postForm' => new PostForm()
    ]);
  }

  public function actionSave() {
    // $_POST
    $data = \Yii::$app->request->post();
    // Active record pattern
    $post = new Post();
    
    $post->attributes = $data['PostForm'];
    $post->votes = 0;
    // SQL Insert
    if ($post->save()){
      return $this->redirect('index');
    } else {
      var_dump ($post->errors);
      return 'error';
    };
    
}

}
?>