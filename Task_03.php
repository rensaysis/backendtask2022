<?php

$username = "root"; 
$pass = ""; 
$host = "localhost"; 
$dbname = "library";  // example database 'library'
	
$db = @mysqli_connect($host, $username, $pass, $dbname);

if(isset($_POST['x'])){
	$query = "SELECT short_description, article FROM news WHERE id='".$_POST['x']."'";
	$res = mysqli_query($db, $query);

	if($res && mysqli_num_rows($res)>0){
		while($row = mysqli_fetch_assoc($res)){
			echo $row['short_description'];
			echo $row['article'];
		}
	}else{
		echo '<h1>404 Not Found</h1>'; // redirect to 404 page
	}

}else{
	echo '<h1>404 Not Found</h1>'; // redirect to 404 page
}



?>
