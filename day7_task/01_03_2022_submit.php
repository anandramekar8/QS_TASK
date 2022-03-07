<?php

/* This code is used to connect with database */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quicksol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
/* This code is used to connect with database */

$sql = "INSERT INTO Persons (firstname, lastname, address, city)
VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['address']."', '".$_POST['city']."', '".$_POST['gender']."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

/* Code used to fetch the data */
$sql = "Select * from Persons";
$data = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($data)) {
    $records[] = $row;
}
/* Code used to fetch the data */
?>

<table class="table" border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Address</th>
            <th>City</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($records as $val) { ?>
        <tr>
            <td><?=$val['PersonID']?></td>
            <td><?=$val['FirstName']?></td>
            <td><?=$val['LastName']?></td>
            <td><?=$val['Address']?></td>
            <td><?=$val['City']?></td>
            <td><?=$val['gender']?></td>

            <td><a href="edit.php?personId=<?=$val['PersonID'];?>">Edit</a> | <a href="delete.php?personId=<?=$val['PersonID'];?>">Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>