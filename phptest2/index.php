<?php
// if 条件分岐

$score = 70;

if ($score > 80) {
    echo "great!".PHP_EOL;
}elseif ($score > 60){
    echo "good!".PHP_EOL;
}
else {
    echo "so so ...".PHP_EOL;
}

//真偽値
/*
 * falseになる場合
 * 文字列：空、"0"
 * 数値：0，0.0
 * 論理値：false
 * 配列：要素の数が0
 * null
*/

$score = 5;
var_dump($score);

if ($score) {
    echo "true";
}

//三項演算子
//()の条件が真のとき左、偽のとき右を代入
//$max = ($a > $b) ? $a :$b;