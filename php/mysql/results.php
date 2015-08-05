<!DOCTYPE html>
<html>
<head>
	<title>Book-O-Rama Search Results</title>
</head>
<body>
	<h1>Book-O-Rama Search Results</h1>
	<?php 
		$searchtype=$_POST['searchtype'];
		$searchterm=$_POST['searchterm'];
		if (!$searchterm || !$searchtype) {
			echo 'you have not entered search details.Please go back and try again.';
			exit;
		}

		if(!get_magic_quotes_gpc()){
			$searchterm=addslashes($searchterm);
			$searchtype=addslashes($searchtype);
		}

		@$db = new mysqli('localhost','bookorama','bookorama123','books');
		if (mysqli_connect_errno()) {
			echo 'Error:Could not connect to database.PLease try again later.';
			exit;
		}

		$query = "select * from books where ".$searchtype." like '%".$searchterm."%'";
		$result = $db->query($query);
		$num_results = $result->num_rows;

		echo "<p>Number of books found: ".$num_results."</p>";
		for ($i=0; $i < $num_results; $i++) { 
			$row = $result->fetch_assoc();
			echo htmlspecialchars(stripslashes($row['title']));
		}

		$result->free();
		$db->close();

	 ?>

</body>
</html>