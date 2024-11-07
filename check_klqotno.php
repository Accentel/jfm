<?php
include('dbconnection/connection.php');

$quet_num=$_GET["keyword"];



    $query =mysqli_query($link,"SELECT  * FROM add_klqot WHERE quet_num = '$quet_num' ");
    if(mysqli_num_rows($query)> 0){
          $msg="Quotation already exist!";
         echo "<script> alert('$msg'); window.self.location</script>";

       echo("<p><font color=Red><b>Quotation Already Registered! You need to change your Quotation number</b></font></p>");
    }
?>
