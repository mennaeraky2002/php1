<?php
$array = ['a','b', 'c', 'd','e', 'f', 'g', 'h', 'i', 'j','k','l','m','n', 'o', 'p', 'q','r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
//$i='c';
$key=array_search('c',$array);
echo $array[$key]."<br>",$array[++$key];
echo basename($_SERVER['PHP_SELF']);
?>          
