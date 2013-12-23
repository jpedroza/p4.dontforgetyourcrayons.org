<?php
$connection=mysqli_connect("localhost","p5user","p5user","p4_dontforgetyourcrayons_org");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	echo "All connected";
}

mysqli_query($connection,"INSERT INTO `p4_dontforgetyourcrayons_org`.`activity` (`primaryKey`, `dateAndTime`, `speed`, `miles`, `minutes`, `seconds`) VALUES (NULL, CURRENT_TIMESTAMP, '10', '20', '30', '40');");
echo "I don't know";


//INSERT INTO `p4_dontforgetyourcrayons_org`.`activity` (`primaryKey`, `dateAndTime`, `speed`, `miles`, `minutes`, `seconds`) VALUES (NULL, CURRENT_TIMESTAMP, '1', '2', '3', '4');
// SELECT * FROM `activity` 
mysqli_close($connection);

?>