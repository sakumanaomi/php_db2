<?php
if(
  !isset($_POST['name']) || $_POST['name'] == '' ||
  !isset($_POST['mailaddress']) || $_POST['mailaddress'] == ''
  !isset($_POST['age']) || $_POST['age'] == '' ||
  !isset($_POST['gender']) || $_POST['gender'] == '' ||
  !isset($_POST['inquiry']) || $_POST['inquiry'] == ''
){
  exit(paramError'')
}

$name = $_POST['name'];
$mailaddress = $_POST['meiladdress'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$inquiry = $_POST['inquiry'];

include('functions.php');
$pdo = connect_to_db();

