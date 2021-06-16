<?php

// $str = "Hello this is demo for string" ;

// echo strlen($str) ; echo "<br>";
// echo strtolower($str); echo "<br>";
// echo strtoupper($str); echo "<br>";
// echo ucfirst($str); echo "<br>";
// echo ucwords($str); echo "<br>";
// echo trim($str); echo "<br>";
// echo str_word_count($str); echo "<br>";
// echo str_replace('demo','test',$str); echo "<br>";












$a = array(
  array(
    'id' => 1,
    'first_name' => 'Abhi',
    'last_name' => 'Bhatnagar',
  ),
  array(
    'id' => 2,
    'first_name' => 'Ajay',
    'last_name' => 'Kumar',
  ),
  array(
    'id' => 3,
    'first_name' => 'Amit',
    'last_name' => 'Yadav',
  )
);
// $last_names = array_column($a, 'last_name');

$sort=array("jatin","Tamil","Amit","Daman","shetty");
$ksort =array("Abhishek"=>"Gurgaon","Chirag"=>"Delhi","Aman"=>"Chandigarh");
$cars = array("BMW","AUDI","CADILAC","JAGUAR");
$colors =array("Abhishek"=>"red","Chirag"=>"blue","Aman"=>"red");





// list($car1, $car2, $car3, $car4) = $cars;
// echo "Abhishek Favourites cars are $car1, $car2, $car3, $car4";

// if (in_array("Amit", $sort))
//   {
//   echo "Hello Amit";
//   }
// else
//   {
//   echo "Amit not found";
//   }

        //unique array value 
        
print_r(array_unique($colors));

// print_r(array_count_values($sort));die;

        //unshift array

// array_unshift($ksort,"Simran");

        //arsort descending with value

        
// print_r($ksort);

// arsort($ksort);
// foreach($ksort as $x=>$x_value)
//    {
//    echo "Key=" . $x . ", Value=" . $x_value;
//    echo "<br>";
//    }

        //asort ascending with value
       
        // asort($ksort);
        // foreach($ksort as $x=>$x_value)
        //    {
        //    echo "Key=" . $x . ", Value=" . $x_value;
        //    echo "<br>";
        //    }

        //krsort descending with key

// krsort($ksort);
// var_dump($ksort);

// foreach($ksort as $x=>$x_value)
//    {
//    echo "Key=" . $x . ", Value=" . $x_value;
//    echo "<br>";
//    }

        // ksort ascending order with key

// ksort($ksort);
// var_dump($ksort);

// foreach($ksort as $x=>$x_value)
//    {
//    echo "Key=" . $x . ", Value=" . $x_value;
//    echo "<br>";
//    }

// print_r(sizeof($a));
// print_r(count($a));
// print_r(array_flip($a));
// print_r($last_names);
// print_r(array_chunk($a,2));

?>