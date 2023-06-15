<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>フィードバック入力画面</title>
</head>

<body>
  <form action="create.php" method="POST">
    <fieldset>
      <legend>フィードバック入力画面</legend>
      <a href="confirm.php">結果画面</a>
      <div>
        username: <input type="text" name="name">
      </div>
      <div>
        email: <input type="email" name="email">
      </div>
      <div>
        age: <input type="number" name="age">
      </div>
      <div>
        feedback: <input type="text" name="feedback">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html><?php









?>