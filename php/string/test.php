<?php  
$name = "wxd";
$email = "wxd@wxd.com";
$feedback = '"daffa\"';
$mailcontent = "Customer name: ".$name."\n".
			   "Customer email: ".$email."\n".
               "Customer comments:\n".$feedback."\n";
echo $mailcontent;
echo nl2br($mailcontent);
echo addslashes($feedback);	
echo stripcslashes(	addslashes($feedback));

$string = "Hello world. Beautiful day today.";
echo $token = strtok($string, "Be");
echo strstr($string,"wor");
if(!strpos($string,"wor")) echo 1;
echo substr_replace($string, 'X',0);
?>