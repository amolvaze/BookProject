<?php 
$db_host        = 'localhost';
$db_user        = 'root';
$db_pass        = '';
$db_database    = 'bookdb'; 
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);
/* checking the database connection */
if (mysqli_connect_errno()) {
printf("Could not connect to database!: %s\n", mysqli_connect_error());
exit();
}
?>