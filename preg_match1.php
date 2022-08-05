<?php
$rtn = preg_match("/\A\d{7}\z/u", $_GET["zip"]);
if (!$rtn) {
  echo "郵便番号は数字7桁で入力してください。";
  exit;
}
$str = "〒101-0051 東京都千代田区神田神保町1-105";
preg_match("/\d{3}-\d{4}/u", $str, $match);
var_dump($match);

// $str = "12345678";
// $rtn = preg_match("/\A\d{7}\z/u", $str);
// $str2 = "1234567 あ";
// $rtn2 = preg_match("/\A\d{7}\z/u", $str2);
// $str3 = "111-1234567";
// $rtn3 = preg_match("/\A\d{7}\z/u", $str3);
// $str4 = "1234567";
// $rtn4 = preg_match("/\A\d{7}\z/u", $str4);

// echo "結果１";
// var_dump($rtn);
// echo "結果２";
// var_dump($rtn2);
// echo "結果３";
// var_dump($rtn3);
// echo "結果４";
// var_dump($rtn4);
