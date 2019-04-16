<?php
// define
define('__FIN__', 'FIN');
define('FIN', 'FIN');
define("END", 'FIN', true);
// array
$var = "test";
$arr1 = array("a", "b", "c");
$arr2 = ["a", "b", "c"];
if (!empty($var)) {
    var_dump($var);
}
// elvis operator
var_dump(isset($var2) ? $var2 : "hoge");
var_dump($var2 ?? "hoge");
// hash
var_dump(
    md5($var),
    sha1($var),
    password_hash($var, PASSWORD_DEFAULT)
);
// create_function
create_function('$var', 'return "Hello, {$var}";');
function ($var) { return "Hello, {$var}"; };
// mb_***
var_dump(
    mb_strlen("文字列"),
    mb_strlen("文字列", 'UTF-8')
);
class Hoge_fuga {
}
class HogeFuga {
    function PrintEmail($email) {}
    function print_email($email) {}
}
// cookie setCookie
setcookie('test', 'hoge');
setcookie('test', 'hoge', time()+3600, 'example.com', '');


$redis = new Redis();
$redis->substr("key", 1,0);


array_collapse($redis);
$redis->str_limit("a");
str_limit("B");
$a = array();

dirname(dirname(dirname(__FILE__)));
dirname(__FILE__, 3);

preg_replace('/,/', '', 'a,b,c,d');
var_dump($redis, $a);

