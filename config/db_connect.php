<?php 
   
 //connect to the data base
$conn = mysqli_connect ('eu-cdbr-west-03.cleardb.net', 'bb8d4bf4bec043', 'c1fddf66', 'heroku_fa69b89ace347e5');

//check connect 
if(!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}
?>