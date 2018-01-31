<?php
/*
文字列に関する基本的なこと
*/

//定数の定義
define("MY_NAME","Hibitas");

//変数に文字列を代入 連結 PHP_EOLは改行
$message = "Hello by message".PHP_EOL."Hello by ";

//変数を表示 定数とも連結
echo $message.MY_NAME;


//変数の型を表示
//var_dump($message);
//行数を表示
//var_dump(__LINE__);
//ファイル名
//var_dump(__FILE__);
//ディレクトリ
//var_dump(__DIR__);
