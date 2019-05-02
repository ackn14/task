<?php
//課題番号１(3~6)
function double($result){
    return $result*2;
}
echo double(10);

//課題番号２(9~12)
function f($a,$b){
    return $a+$b;
}
echo f(2,3);

//課題番号３(15~18)
$arr = array(1,3,5,7,9);
echo array_product($arr);
echo "<br>";

 $a=0;

 //課題番号４(分からなかった)
 function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
}
 return $max_number;
 }


$str = "<h1>strip_tags1.関数</h1>"
  . "<p>タグ取り除くよっ！</p>";
echo strip_tags($str) ."\n";

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
echo "\n";

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result2 = array_merge($array1, $array2);
print_r($result2);
echo "\n";

$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 日 * 24 時間 * 60 分 * 60 秒
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";

echo date( "n月j日", mktime(0,0,0,4,0) );

?>