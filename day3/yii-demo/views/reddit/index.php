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
      <a href="/reddit/upvote?id=<?= $post->id ?>">Vote Up</a>
      <p><?= $post->votes?></p>
      <a href="/reddit/downvote?id=<?= $post->id ?>">Vote Down</a>
    </blockquote>
  </div>
</div>
<br>

  <?php endforeach; ?>
  <a href="http://localhost:8080/reddit/submit">Add a new post</a>