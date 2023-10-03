<?php

// $location_distance =20;
// $price=2.5;
// // $discount=2;

// if($location_distance){
// echo $location_distance*$price;
// echo $location_distance*$price;
// echo $location_distance*$price;

class price{
    public $location_distance=20;
    public $price=2.5;
    // public $discount=2;

    function __construct(){
        $location_distance=20;
         $price=2.5;
        if($location_distance){
             $location_distance*$price."<br>";
             $location_distance*$price."<br>";
             $location_distance*$price."<br>";
    }else {
        echo "error";


    }public function displayInfo() {
       
    }
    

}

}
$price1 =new price();
$price1->__construct();
 $price1->displayInfo();


?>