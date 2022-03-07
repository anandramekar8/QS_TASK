<!-- 1) Create function to add, subtract, multiply, devide & get remained by passing 2 number as arguements and print on screen. -->

<?php

function input($x,$y)
{
   $add = $x + $y;
   $sub = $x - $y;
   $mul = $x * $y;
   $div = $x / $y;
   $mod = $x % $y;

   echo($add); 
   echo($sub); 
   echo($mul); 
   echo($div); 
   echo($mod); 
}

input(18,4);




// 2) Create function to add all values of an array by passing array as arguenment and print on screen.


function sum($arr,$s)
{

$sum=0;
for($i = 0;$i < $s; $i++)

$sum += $arr[$i];
return $sum;
}

$arr = array(2,4,6,8,10,12);

$s = sizeof($arr);

echo "sum of array is : ".sum($arr,$s);



// 3) Iterate the above array and print on screen.


$array = array(
   'first' => array(
       'company1' => 'BMW',
       'company2' => 'Mercedees'
   ),
   'second' => array(
       'company1' => 'Asian',
       'company2' => 'Nerolal'
   ),
   'third' => array(
       'company1' => 'Vimal',
       'company2' => 'Rajni Gandha'
   ),
) 

  


?>



