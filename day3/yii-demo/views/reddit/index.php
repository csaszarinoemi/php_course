<h2>Reddit</h2>
<br>
<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm; 
    
 foreach ($posts as $post): ?>

<div class="card">
  <h3 class="card-header">
   <?= $post->title?>
  </h3>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p><?= $post->content?></p>
      <footer class="blockquote-footer">Posted by <cite title="Source Title"><?= $post->creator?></cite></footer>
      <br>
      <button type="button" class="btn btn-outline-success">Vote Up</button>
      <p><?= $post->votes?></p>
      <button type="button" class="btn btn-outline-danger">Vote Down</button>
    </blockquote>
  </div>
</div>
<br>

  <?php endforeach; ?>
  <a href="http://localhost:8080/reddit/submit">Add a new post</a>