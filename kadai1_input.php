<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>課題１</title>
</head>
<body>
  <form action="kadai1_create.php" method="POST">
    <fieldset>
      <legend>お問い合わせ内容</legend>
      <div>
        氏名: <input type="text" name="name">
      </div>
      <div>
        メールアドレス:<input type="text" name="mailaddress">
      </div>
      <div>
        年齢:<input type="text" name="age">
      </div>
      <div>
        性別:<input type="radio" name="gender" value="male">男性
        <input type="radio" name="gender" value="female">女性
      </div>
      <div>
        お問い合わせ内容: <input type="text" name="inquiry">
      </div>
    </fieldset>
  </form>
</body>
</html>