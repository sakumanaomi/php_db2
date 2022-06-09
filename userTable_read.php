<?php
include('functions.php');
$pdo = connect_to_db();

$sql = 'SELECT * FROM user_table';

$stmt = $pdo->prepare($sql);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
foreach ($result as $record) {
  $output .= "
    <tr>
      <td>{$record["username"]}</td>
      <td>{$record["password"]}</td>
      <td>{$record["is_admin"]}</td>
      <td>{$record["is_deleted"]}</td>
      <td>
        <a href='userTable_edit.php?id={$record["id"]}'>edit</a>
      </td>
       <td>
        <a href='userTable_delete.php?id={$record["id"]}'>delete</a>
      </td>
    </tr>
  ";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー名・パスワード</title>
</head>

<body>
  <fieldset>
    <legend>ユーザー名・パスワード（一覧画面）</legend>
    <a href="userTable_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>username</th>
          <th>password</th>
          <th>admin</th>
          <th>deleted</th>
        </tr>
      </thead>
      <tbody>
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>