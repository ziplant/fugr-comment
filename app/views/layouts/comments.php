<?php 

require './app/models/Comment.php';

$model = new Comment();
$comments = $model->readAll();

?>

<ul class="comments_list">
  <?php 
    foreach ($comments as $row) {
  ?>

    <li class="comments_item comment">
      <div class="comment_head">
        <h4 class="comment_name"><?php echo $row['name'] ?></h4>
        <div class="comment_info">
          <span class="comment_datetime">

          <?php 
            $date = new DateTime($row['datetime']);
            echo $date->format('d.m.Y H:i');
          ?>

          </span>
        </div>
      </div>
      <div class="comment_body">
        <p class="comment_text"><?php echo $row['comment'] ?></p>
      </div>
    </li>

  <?php
    }
  ?>
</ul>