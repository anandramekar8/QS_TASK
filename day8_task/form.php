<?php    include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php crud operations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
     <form action="#" method="POST">
        <div class="title">Registration Form</div>
         <div class="form">
            <div class="input_field">
                <label for="firstName">First Name</label>
                <input type="text" class="input" name="firstname" required>
            </div>

            <div class="input_field">
                <label for="lastName">Last Name</label>
                <input type="text" class="input" name="lastname" required>
            </div>

            <div class="input_field">
                <label for="city">City</label>
                <input type="text" class="input" name="city" required>
            </div>

            <div class="input_field">
                <label for="address">Address</label>
                <textarea required name="address" id="" cols="30" rows="3" class="textarea"></textarea>
            </div>

            <!-- <div class="input_field">
                <label for="">Gender</label>
                   <input type="radio" id="male" name="gender" value="MALE"><label for="male">MALE</label><br>
                         
                   <input type="radio" id="female" name="gender" value="FEMALE"><label for="female">FEMALE</label><br>
                         
            </div> -->

            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="register">
            </div>
        </div>
     </form>
    </div>
</body>
</html>

<?php   
      if($_POST['register'])
      {
          $fname = $_POST['firstname'];
          $lname = $_POST['lastname'];
          $city = $_POST['city'];
          $address = $_POST['address'];
       
        


          $query = "INSERT INTO STUDENTFORM (firstname,lastname,city,address) VALUES ('$fname','$lname','$city','$address')";

          $data = mysqli_query($conn,$query);

          if($data)
          {
              echo "data inserted into database";
          }
          else
          {
              echo "failed";
          }
        }
?>