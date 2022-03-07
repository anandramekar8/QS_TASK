<?php
   $conn = mysqli_connect("localhost","root","","phpcrud");

    if(isset($_POST['checking_add']))
    {
         $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $class = $_POST['class'];
          $section = $_POST['section'];

          $query = "insert into students (firstname,lastname,class,section) values ('$fname','$lname','$class','$section')";
          $query_run= mysqli_query($conn, $query);

          if($query_run)
          {
                echo $return = true;
          }
          else{
               echo $return = false;
      }
    }
?>