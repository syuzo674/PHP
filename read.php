<?php
// ユーザーが指定したファイル名を取得
$filename = $_GET["filename"]; 

// ファイルパスを構築
$filepath = "data/" . $filename . ".txt";

// ファイルを開く（読み取り専用）
$file = fopen($filepath, "r");
if ($file) {
  // データを表示させる空の変数
  $str = "";

  flock($file, LOCK_EX);

  // fgets()で1行ずつ取得→$lineに格納
  while ($line = fgets($file)) {
    // 取得したデータを`$str`に追加する
    $str .= "<tr><td>{$line}</td></tr>";
  }

  // ロックを解除する
  flock($file, LOCK_UN);
  // ファイルを閉じる
  fclose($file);
} else {
  // ファイルが開けなかった場合のエラーハンドリング
  $str = "<tr><td>ファイルを開けませんでした。</td></tr>";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>結果画面</title>
</head>

<body>
  <fieldset>
    <legend>結果画面</legend>
    <a href="index.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>result</th>
        </tr>
      </thead>
      <tbody>
        <!-- $strを呼び出して画面に表示 -->
        <?= $str ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>