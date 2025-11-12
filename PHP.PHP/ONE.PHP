<?php

$arr=array("prem","saniya","yanush","amit");

print_r($arr);

var_export($arr);

$number=10;

$value=printf(" the number is : %d ",$number);
 
echo $value;
//  there are  many ways to print the output on display screen
//   1. echo
//   2.print     this is return allways one  1 and similer to echo
//   3.print_r();  this is mostly use for the arrays and object 
//   4.var_dump(); this is shows the datatype and value of the of variable
//   5.var_export();
//   6.printf();  similer to c language 
//   7.sprintf(); 
// 

//  usage of print_r in the sence of object 
// class student{
//     public $name;
//     public $age;

//     public function __constructor($name,$age){
//         $this->name=$name;
//         $this->age=$age;

//     }
// }
//     //  now here is the new object which is student1
//     $student1= new student("prem",19);
//     //  we are print the value using  print_r();
//     print_r($student1);

class car{
    public $brand;
    private $price;
    protected $year;

    public function __constructor($brand,$price,$year){
        $this->brand=$brand;
        $this->price=$price;
        $this->year=$year;

    }
}
    
    $car1 =new car("BMW",5000000,2025);

     print_r($car1);


$name = readline("Enter your name: ");
echo "Hello, $name!";
?>


// ?>