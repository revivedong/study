<?php  
// 连接数据库
try {
	// $pdo = new PDO("mysql:host=localhost;dbname=test","root","");
	$pdo = new PDO("uri:mysqlPdo.ini","root","");
} catch (PDOException $e) {
	die("数据库链接失败".$e->getMessage());
}
// 执行query查询返回一个预处理对象
$sql = "select * from admin";
$stmt = $pdo->query($sql);
$list = $stmt->fetchAll(2); 
print_r($list);
// 释放资源
$stmt = null;
$pdo = null;

?>