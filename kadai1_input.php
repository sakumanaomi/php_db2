<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>課題１</title>
   <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <form action="kadai1_create.php" method="POST">
    <fieldset>
      <legend>お問い合わせ内容</legend>
      <div class="form_item">
        <label for=name class="form_item_label">氏名:</label>
        <input type="text" class="form_item_input" name="name">
      </div>
      <div class="form_item">
        <label for="mailaddress" class="form_item_label">メールアドレス:</label>  
        <input type="text" class="form_item_input" name="mailaddress">
      </div>
      <div class="form_item">
        <label for="age" class="form_item_label">年齢:</label>  
        <input type="text" class="form_item_input" name="age">
      </div>
      <div class="form_item">
        <label for="gender" class="form_item_label">性別:</label>
        <input type="radio" class="form_item_input_radio" name="gender" value="male">男性
        <input type="radio" class="form_item_input_radio" name="gender" value="female">女性
      </div>
      <div class="form_item">
        お問い合わせ内容: <textarea rows="10" cols="60" class="form_item_textarea" name="inquiry"></textarea>
      </div>
      <div>
        <button>送信する</button>
      </div>
    </fieldset>
  </form>
</body>
</html>