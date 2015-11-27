$( document ).ready(function() {
    
$('#yes').on('click', function() {   
	//$('#dialog').show();
	$('#dialog').dialog();
	
});

//$('#submitbtn').on('click', function() {   
  //var mytitle = $('#title').val();
//  var myshipping = $('#shipping').val();
   //alert(mytitle);
   //for (var i=0; i<arr.length; i++) {
    //var length = arr.length;
	//length++;
 // Array.prototype.push.apply(title, mytitle);
   //arr[i].title.push(mytitle); 
   // arr[i].author.push(myauthor);
	//arr[i].shipping.push(myshipping);
	
    // break; 
//}
// alert(arr);
//});
  
//$("#submitbtn").click(function() {
    //var mytitle = $('#title').val();
	//var myauthor = $('#author').val();
    //var myshipping = $('#shipping').val();
	//if(mytitle!='' && myauthor!='' && myshipping!= ''){
    //var new_row = "<tr><td>" + mytitle + "</td><td>" + myauthor + "</td><td>" + myshipping + "</td></tr>";
    //$("table").append(new_row);
//}
  //else {
   // alert("All form fields are required. ");
  //}
	//cleartext();
    //return false;
//});
	

	
});

function closeform(){

  $('#dialog').css('display', 'none');
  

}

function cleartext() {
 
   document.getElementById("title").value  = "";
   document.getElementById("author").value  = "";
   document.getElementById("shipping").value  = "";
}