



<?php
$host="localhost";
$user="root";
$passs="";
$db   ="super";


$conn= mysqli_connect($host,$user,$passs,$db);

if($conn){


}else{
	echo"disconnected";
}

?>