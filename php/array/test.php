<?php  
$array = range(1,10);
function my_print($value){
	echo "$value<br />";
}
// array_walk($array, 'my_print');

function my_mutiply(&$value,$key,$factor){
	$value *= $factor;
}

array_walk($array, 'my_mutiply',3);
// print_r($array);

///////////////
$array2= array('key1' => array('key11' =>'q' ,'key12'=>'w' ) , 'key2' =>'value2' ,'key3' =>'value3' );
extract($array2);
print_r($key1);
/////

?>