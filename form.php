<?php
require 'db.php';

if(isset($_POST["submitbtn"])){
if(!empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['shipping']) ) {
$title=$_POST['title'];
$author=$_POST['author'];
$shipping=$_POST['shipping'];

$con=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($con,'bookdb') or die("cannot select DB");

 $query=mysqli_query($con, "SELECT * FROM book WHERE title='".$title."' OR author='".$author."' " );
$numrows=mysqli_num_rows($query);
if($numrows >=1){

echo "<script type='text/javascript'>alert('This book already exists! Please try again with new one.')</script>";

}
else
{
$sql="INSERT INTO book VALUES('','$title','$author','$shipping')";
$result=mysqli_query($con, $sql);
if($result){

echo "<script type='text/javascript'>alert('Book has been successfully added')</script>";
} else {

echo "<script type='text/javascript'>alert('Failure!')</script>";
}
} 
} else {
echo "<script type='text/javascript'>alert('All fields are required!')</script>";
}
}
?>