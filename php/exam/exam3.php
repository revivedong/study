<?php 	 
echo __FILE__	; 
$path = str_replace('\\', '/', __FILE__);
var_dump(preg_split('/\./', $path)[1]);
echo strrchr($path, '.');
echo substr($path,strrpos($path, '.'));
$path_parts = pathinfo($path);
echo $path_parts['extension'];
echo basename($path);
$pattern = '/^[^\.]+\.([\w]+)$/';
echo preg_replace($pattern, '${0}', basename($path));
$string = 'The quick brown fox jumped over the lazy dog.';
$patterns = array();
$patterns[0] = '/quick/';
$patterns[1] = '/brown/';
$patterns[2] = '/fox/';
$replacements = array();
$replacements[0] = 'bear';
$replacements[1] = 'black';
$replacements[2] = 'slow';
print_r($replacements);	
echo preg_replace($patterns, $replacements, $string);
echo strpos('abc', 'a');
$text = 'Content-Type:text/xml';
echo '<br />';
print strchr($text,':');
var_dump('01' == 1);
$a = "0123";

var_dump($a);
echo $a;
?>