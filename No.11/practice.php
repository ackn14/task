<?php 
//課題番号１(3~5)
$a=3;
$b=7;
echo $a+$b;

//課題番号２(8~9)
$array_month=["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];

//課題番号３(12~15)
$hello="Hello";
$name="Kazuma";
$world="'s World!";
echo $hello . $name . $world;

//課題番号４(18~20)
$tech_boost="tech";
$tech_boost .="_boost";
echo $tech_boost;

//課題番号５(23~39)
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];
?>