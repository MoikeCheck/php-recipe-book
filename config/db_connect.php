<?php 
   
 //connect to the data base
$conn = mysqli_connect ('localhost', 'mike', '3$kHH|9zrVr#Qup&', 'php-recipe-book');

//check connect 
if(!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}
?>