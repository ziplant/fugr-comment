<?php 

class Comment extends db {
  public function readAll() {
    $sql = "select * from Comment order by id desc";
    $statement = $this->pdo->prepare($sql);
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function create($body) {
    $sql = "insert into Comment (name, comment) values (:name, :comment)";
    $statement = $this->pdo->prepare($sql);
    $statement->bindParam(":name", $body['name']);
    $statement->bindParam(":comment", $body['comment']);

    return $statement->execute();
  }
}
?>