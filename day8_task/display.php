<html>
    <head>
        <title>Display</title>
        <style>
            body{
                background: whitesmoke;
            }
        </style>
    </head>
    <body>
        
    </body>
</html>

<?php 
    include("connection.php");
    // error_reporting(0);

    $query = "SELECT * FROM STUDENTFORM";

    $data = mysqli_query($conn,$query);

    $total = mysqli_num_rows($data);
    // echo $total;


    
    // echo $result[firstname]." ".$result[lastname];
      
     

    // echo $result;

    if($total != 0)
    {
        ?>
        <h2 style="text-align: center;"><mark>Displaying All Records</mark></h2>

        <center>
        <table border="1" cellspacing="7">
           <tr>
            <th width="5%">id</th>   
            <th width="10%">firstname</th>
            <th width="10%">lastname</th>
            <th width="10%">city</th>
            <th width="25%">address</th>
            <th width="15%">operations</th>
           </tr>     
        <?php
        // echo $total;
       while($result = mysqli_fetch_assoc($data))
       {
           echo "<tr>
                   <td>".$result['id']."</td>
                   <td>".$result['firstname']."</td>
                   <td>".$result['lastname']."</td>
                   <td>".$result['city']."</td>
                   <td>".$result['address']."</td>
               

                   <td><a href='update_design.php?id=$result[id]'>update</a></td>

                 </tr>   
          ";
       }
    }
    else
    {
        echo "no records found";
    }
?>
   </table>
   </center>

   <!-- echo $result[firstname]." ".$result[lastname]." ".$result[city]." ".$result[address]; -->