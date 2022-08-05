<?php
require_once "functions.php";

$height = (float) $_POST["height"];
$weight = (float) $_POST["weight"];

// if ((0 < $height) && ($height < 3)) {
//   echo "適正体重は" . $height * $height * 22 . "kgです。";
// } else {
//   echo "身長を正しく入力してください。";
// }

// バリデーション
if (!(( 0 < $height) && ($height < 3))) {
  echo "身長を正しく入力してください。";
  exit;
}
if (($weight < 30) || (200 < $weight)) {
  echo "体重を正しく入力してください。";
  exit;
}

// 適正体重の算出
$goal_weight = $height * $height * 22;
// 適正体重との差
$difference = abs($goal_weight - $weight);

echo "体重" . str2html($weight) . "kg<br>";
echo "理想" . str2html($goal_weight) . "kg<br>";
echo "後" . str2html($difference) . "kgで適正体重です。<br>";

if ($difference > 0){
  echo '適正体重より' . str2html(abs($difference)) . 'kg低いです';
} elseif ($difference < 0) {
  echo '適正体重より' . str2html(abs($difference)) . 'kg太っています';
} else {
  echo '適正体重ぴったりです';
}