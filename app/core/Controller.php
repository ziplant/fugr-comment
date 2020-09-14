<?php 

class Controller {
  protected $body, $query;

  public function __construct() {
    $postData = file_get_contents('php://input');
    $data = json_decode($postData, true);

    if (is_null($data)) {
      parse_str($postData, $data);
    }
    $this->body = $data;
    parse_str($_SERVER['QUERY_STRING'], $this->query);
  }

  public function model($model) {
    require "./app/models/$model.php";
    return new $model();
  }

  public function view($view, $data = []) {
    include "./app/views/$view.php";
  }
  
  public function layout($layout, $data = []) {
    include "./app/layouts/$layout.php";
  }
}

?>