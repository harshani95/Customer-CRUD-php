<?php
$con = new mysqli('localhost', 'root','1218','customer_crud');

//if ($con){
 //   echo 'connected';
//}else{
  //  die(mysqli_error($con));
//}

if (!$con){
    die(mysqli_error($con));
}

?>