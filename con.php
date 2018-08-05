<?php

  $servername = "localhost";
  $username = "root";
  $password = "password123";
  $db = "PurpleBugExam";

  $conn = new mysqli($servername,$username,$password,$db);

  //  if($conn->connect_error){
  //    echo $conn->connect_error;
  //  }
  //  else{
  //    echo "connected to serve";
  //  }
?>