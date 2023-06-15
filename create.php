<?php
// まずはデータが取れているかチェック
// var_dump($_POST);
// exit();

// 個別のデータを取得
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
$text = $_POST["feedback"];

// 取ってきたデータを1行に
$write_data = "{$name} {$age} {$email} {$text}\n";

// ファイルを開く
$file = fopen("data/{$name}.txt", "a");

flock($file, LOCK_EX);

fwrite($file, $write_data);

flock($file,LOCK_UN);

fclose($file);

header("Location:index.php");