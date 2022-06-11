<?php
if(
  !isset($_POST['name']) || $_POST['name'] == '' ||
  !isset($_POST['mailaddress']) || $_POST['mailaddress'] == '' ||
  !isset($_POST['age']) || $_POST['age'] == '' ||
  !isset($_POST['gender']) || $_POST['gender'] == '' ||
  !isset($_POST['inquiry']) || $_POST['inquiry'] == ''
){
  exit('paramError');
}

$name = $_POST['name'];
$mailaddress = $_POST['mailaddress'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$inquiry = $_POST['inquiry'];

include('functions.php');
$pdo = connect_to_db();
$sql = 'INSERT INTO inquiry_table(id, name, mailaddress, age, gender, inquiry, created_at, updated_at) VALUES(NULL, :name,:mailaddress, :age, :gender, :inquiry, now(),now())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':mailaddress', $mailaddress, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_STR);
$stmt->bindValue(':gender', $gender, PDO::PARAM_STR);
$stmt->bindValue(':inquiry', $inquiry, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:kadai1_input.php");
exit();
