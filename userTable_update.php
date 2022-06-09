<?php
// var_dump($_POST);
// exit();

include('functions.php');
// 入力項目のチェック
if(
  !isset($_POST['username'])|| $_POST['username'] == ''||
  !isset($_POST['password'])|| $_POST['password'] == ''||
  !isset($_POST['admin'])|| $_POST['admin'] == ''||
  !isset($_POST['deleted'])|| $_POST['deleted'] == ''||
  !isset($_POST['id'])|| $_POST['id'] == ''
){
  exit('paramError');
}

$username = $_POST['username'];
$password = $_POST['password'];
$admin = $_POST['admin'];
$deleted = $_POST['deleted'];
$id = $_POST['id'];
// DB接続
$pdo = connect_to_db();

$sql = 'UPDATE user_table SET username=:username, password=:password, is_admin=:is_admin,is_deleted=:is_deleted, updated_at=now() WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->bindValue(':is_admin', $admin, PDO::PARAM_STR);
$stmt->bindValue(':is_deleted', $deleted, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header('Location:userTable_read.php');
exit();
