<?php
//課題番号１
$name="Kazuma";
if($name == "Kazuma"){
echo "私は".$name."です";
}
else{
echo $name."ではありません";
}

//課題番号２
$result=0;
for($i=0;$i < 10000;$i++){
    $result += $i+1;
}
echo $result;

//課題番号３
$fruits=["リンゴ","ミカン","モモ","バナナ","メロン"];
foreach($fruits as $fruits2){
    echo $fruits2;
}

//課題番号４
/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i < $end+1; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}

?>