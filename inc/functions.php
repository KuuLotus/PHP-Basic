<?php
function str2html(string $string): string
{
  return htmlspecialchars($string, ENT_QUOTES, "UTF-8");
}

function db_open(): PDO
{
  $user = "phpuser";
  $pass = "kuu1227ren0910";
  $opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
  ];
  $dbh = new PDO("mysql:host=localhost;dbname=sample_db", $user, $pass, $opt);
  return $dbh;
}

