<?php    include("connection.php");
 
    $id =  $_GET['id'];
  
    $query = "SELECT * FROM STUDENTFORM where id='$id'";

    $data = mysqli_query($conn,$query);

    $total = mysqli_num_rows($data);

    $result = mysqli_fetch_assoc($data);


?>

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
        <div class="title">Update Form</div>
         <div class="form">
            <div class="input_field">
                <label for="firstName">First Name</label>
                <input type="text" class="input" name="firstname" value="<?php echo $result['firstname'] ?>" required>
            </div>

            <div class="input_field">
                <label for="lastName">Last Name</label>
                <input type="text" class="input" name="lastname" value="<?php echo $result['lastname'] ?>" required>
            </div>

            <div class="input_field">
                <label for="city">City</label>
                <input type="text" class="input" name="city" value="<?php echo $result['city'] ?>" required>
            </div>

            <div class="input_field">
                <label for="address">Address</label>
                <textarea required name="address" id="" cols="30" rows="3" class="textarea"><?php echo $result['address'] ?></textarea>
            </div>
<!-- 
            <div class="input_field">
                   <input type="radio" id="male" name="male" value="MALE">
                         <label for="male">MALE</label><br>
                   <input type="radio" id="female" name="female" value="FEMALE">
                         <label for="female">FEMALE</label><br>
            </div> -->

            <div class="input_field">
                <input type="submit" value="Update Details" class="btn" name="update">
            </div>
        </div>
     </form>
    </div>
</body>
</html>

<?php   
      if($_POST['update'])
      {
          $fname = $_POST['firstname'];
          $lname = $_POST['lastname'];
          $city = $_POST['city'];
          $address = $_POST['address'];
        //   $gender = $_POST['gender'];


        //   $query = "INSERT INTO STUDENTFORM (firstname,lastname,city,address) VALUES ('$fname','$lname','$city','$address')";



          $query = "UPDATE STUDENTFORM SET firstname='$fname',lastname='$lname',city='$city',address='$address' where id='$id'";

          $data = mysqli_query($conn,$query);

          if($data)
          {
              echo "data updated into database";
          }
          else
          {
              echo "failed";
          }
        }
?>

<?php 
    echo $_GET['id'];
    echo $_GET['fn'];
    echo $_GET['ln'];
    echo $_GET['cty'];
    echo $_GET['addr'];
?>