<?php
require_once "functions.php";
// データを読み込む
$fp = fopen("bookdata.csv", "r");
if ($fp === false) {
  echo "ファイルのオープンに失敗しました。";
  exit;
}
// // 1行を処理する
// while ($row = fgetcsv($fp)) {
//   var_dump($row);
// }

// 書籍名と著者名を出力
while ($row = fgetcsv($fp)) {
  echo "書籍名:" . str2html($row[0]) . "<br>";
  echo "著者名：" . str2html($row[4]) . "<br><br>";
}
