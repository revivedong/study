<?php 
header('Content-Type:text/html;charset=utf-8');
// stren()与mb_stren()的作用分别是什么
 $str1 = "php";
 $str2 = "你好王小二。";
 echo strlen($str2); // 指针对单字节编码字符
 echo mb_strlen($str2); //未指定字符集，是用内部字符编码（单字节）
 echo mb_strlen($str2,'utf8');
 echo "\n";
 echo $str2;
 echo mb_substr($str2, 2,5,'UTF-8'); 
 echo "<br />";
 print_r(join(preg_split("//u", $str2,-1,PREG_SPLIT_NO_EMPTY)));
 echo "<br />";
 $str ="1234567890";
 $str = strrev($str);
 $str = chunk_split($str,3,",");
 $str = strrev($str);
 echo ltrim($str,",");
  echo "<br />";
  
?>
<a href="exam2.php">跳跳跳</a>