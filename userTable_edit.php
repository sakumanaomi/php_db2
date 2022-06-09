<?php
// var_dump($_GET);
// exit();

include('functions.php');

$id = $_GET['id'];

$pdo = connect_to_db();

$sql = 'SELECT * FROM user_table WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$record = $stmt->fetch(PDO::FETCH_ASSOC);

// var_dump($record);
// exit();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー名・パスワード（編集画面）</title>
</head>

<body>
  <form action="userTable_update.php" method="POST">
    <fieldset>
      <legend>編集画面</legend>
      <a href="todo_read.php">一覧画面</a>
      <div>
        ユーザー名: <input type="text" name="username" value="<?= $record['username']?>">
      </div>
      <div>
        パスワード: <input type="text" name="password" value="<?= $record['password']?>">
      </div>
      <div>
        admin: <input type="number" name="admin" value="<?= $record['is_admin']?>">
      </div>
      <div>
        deleted: <input type="number" name="deleted" value="<?= $record['is_deleted']?>">
      </div>
      <input type="hidden" name="id" value="<?= $record['id']?>">
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>