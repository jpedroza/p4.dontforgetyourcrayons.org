<?php

//provides connection to the database for insert into the db
$connection=mysqli_connect("localhost","p5user","p5user","p4_dontforgetyourcrayons_org");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 

//$sts = $_POST[speed].toString();
mysqli_query($connection,"INSERT INTO `p4_dontforgetyourcrayons_org`.`activity` (`primaryKey`, `dateAndTime`, speed, `miles`, `minutes`, `seconds`) 
VALUES (NULL, CURRENT_TIMESTAMP, $_POST[speed], '12', '58', '27')");


mysqli_close($connection);

?>
