<?php 
class person{
	private $guest = 'wu';
	private $gender = 'male';
	public function __set($name,$value){
		$this->$name = $value;
	}
	public function __get($name)
	{
		return $this->$name;
	}
}

$student = new person();
$student->name ='da a ';
echo $student->name;
var_dump($student);



?>