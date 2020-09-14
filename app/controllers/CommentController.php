<?php

class CommentController extends Controller {
  public function create() {
    if($_SERVER['REQUEST_METHOD'] == 'POST' &&
      !empty($this->body['name']) && !empty($this->body['comment']
    )) {
      $model = $this->model('Comment');
      $model->create($this->body);
    }

    header('Location: /');
  }
}

?>