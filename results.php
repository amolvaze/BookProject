<?php
    require 'db.php';
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($con,'bookdb') or die("cannot select DB");
$query=mysqli_query($con, "SELECT * FROM book" );
$numrows=mysqli_num_rows($query);

    if ( ! $query ) {
        echo mysqli_error();
        die;    
    }    
     $emparray = array();
echo "<table cellpadding=10 border=1>";
echo "<th> Id </th>";
echo "<th> Title </th>";
echo "<th> Author </th>";
echo "<th> Shipping </th>";

//while($row = mysqli_fetch_array($query)){
while($row = mysqli_fetch_assoc($query)){

$emparray[] = $row;
echo "<tr>";
  echo "<td>". $row['Id'] ."</td>";
echo "<td>". $row['Title'] ."</td>";
echo "<td>". $row['Author'] ."</td>";
echo "<td>". $row['Shipping'] ."</td>";
echo "</tr>";
  }
echo "</table>";


	//write to json file
	$fp = fopen('bookdata.json', 'w');
    fwrite($fp, json_encode($emparray));
	// echo '{"users":'.json_encode($emparray).'}';
    fclose($fp);


    //close the db connection
    mysqli_close($con);
?> 

