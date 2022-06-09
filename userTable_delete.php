<?php
// var_dump($_GET);
// exit();

include('functions.php');

$id = $_GET['id'];

$pdo = connect_to_db();

$sql = 'DELETE  FROM user_table WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:userTable_read.php");
exit();