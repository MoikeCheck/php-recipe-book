<?php 
   
 //connect to the data base
$conn = mysqli_connect ('localhost', 'mike', 'miya3124', 'php-recipe-book');

//check connect 
if(!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}
?>