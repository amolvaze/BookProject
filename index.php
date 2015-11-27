<!doctype html>
<html>
<head>
<title>My Book Place</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript" src="book.json"></script>
<script type="text/javascript" src="book.js"></script>

<!--<script>
function sam(){
      var results = document.getElementById("results");
      var mydata = JSON.parse(data);
      // alert(mydata[0].title);
	  results.innerHTML = "";
	  for(var obj in mydata){
				results.innerHTML += mydata[obj].title+"  "+mydata[obj].author+"  "+mydata[obj].shipping+"<hr />";
			}
	  }
</script>-->

<!--<script>
 
 var xmlhttp = new XMLHttpRequest();
 var url = "bookdata.json";
 
xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        myFunction(xmlhttp.responseText);
    }
}

xmlhttp.open("POST", url, true);
xmlhttp.send();

function myFunction(response) {
    var arr = JSON.parse(response);
    var i;
    var out = "<table>";

    for(i = 0; i < arr.length; i++) {
        out += "<tr><td>" +
        arr[i].Title +
        "</td><td>" +
        arr[i].Author +
        "</td><td>" +
        arr[i].Shipping +
        "</td></tr>";
    }
    out += "</table>";
    document.getElementById("results").innerHTML = out;
}
</script>-->

<script>
 $.ajax({
    type:'GET',
    url:'http://localhost/www22/results.php',
    data:'',
	// datatype:'json',
    success: function(data){
            $('#results').html(data);
    }
});
</script>
<!--<script type="text/javascript">

$(document).ready(function(){
var url="http://localhost/www22/results.php";
$("#jsondata tbody").html("");
$.getJSON(url,function(data){
$.each(data.users, function(i,user){
alert(user);
var newRow =
"<tr>"
+"<td>"+user.Id+"</td>"
+"<td>"+user.Title+"</td>"
+"<td>"+user.Author+"</td>"
+"<td>"+user.Shipping+"</td>"
+"</tr>" ;
$(newRow).appendTo("#jsondata tbody");
});
});
});

</script>-->
</head>
<!--<body onLoad="sam()">-->
<body>
<div class = "container">
<div class = "header">
<a href = "#" class ="tooltip" title= "My Book Place" ></a>
<h1 class = "logotitle">My Books</h1>

</div>
 <div class = "navigation">
   <nav>
   <ul>
	     <li><a href = "#" title= "EI Pooch" >EI Pooch</a></li>
	      <li><a href = "#"  title= "The Flight"> The Flight</a></li>
		  <li><a href = "#" title= "Top 10 Australian Beaches">Top 10 Australian Beaches</a></li>
		
	</ul>
   
   </nav> 
</div><br/><br/>

<div class = "welcome">
         <h3 class = "welcometxt">Welcome back! </h3><br/>
	<p class = "txt">It's been a while. <br/><br/>
		 Read any new books lately.<br/>
		 </p><br/>
  <ul class = "decision">
  <!--<li><input type = "submit" id = "no" name = "no" value = "No"></li>-->
  <li><input type = "submit" id = "yes" name = "yes" value = "Yes" ></li>
  </ul>
   
 </div><br/><br/>

 <div id = "dialog" style = "display:none;">
   <form action="" method="POST"  id = "myform" name = "myform"  />
    Title: <input type = "text" name = "title" id = "title" /><br/><br/>
    Author: <input type = "text" name = "author" id = "author" /><br/><br/>
	Shipping: <input type = "text" name = "shipping" id = "shipping" /><br/><br/>
	<input type = "submit" id = "submitbtn" name= "submitbtn" value= "Submit" />
	<!--<input type = "submit" id = "close" name= "close" value= "Close" onClick = "closeform()"/>-->
   </form>
 </div>
 
<!--<input type="button" name="buton1" value="Submit" onClick="fetch_contents();">-->
 <br/><br/>
  <div id="results"></div>
  
    <div class = "footer"> 
   <footer> Copyright &copy;  My Books</footer>
   
</div>

</div>
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


</body>
</html> 