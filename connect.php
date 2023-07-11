<?php 

      //db connection
      $conn = mysqli_connect('localhost','root','','health');
      if(!$conn){
          die(mysqli_error($conn));
      }

?>