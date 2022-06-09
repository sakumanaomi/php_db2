<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザーネーム・パスワード登録画面</title>
</head>

<body>
  <form action="userTable_create.php" method="POST">
    <fieldset>
      <legend>ユーザー名・PW登録</legend>
      <div>
        ユーザー名: <input type="text" name="username">
      </div>
      <div>
        password: <input type="text" name="password" >
      </div>
       <div>
        アドミン: <input type="number" name="admin" >
      </div>
       <div>
        削除: <input type="number" name="deleted" >
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>
  
</body>
</html>