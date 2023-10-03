<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "driver_join";


$conn = mysqli_connect($servername, $username, $password,$database);
if(!$conn){
    die("not exit the connection");
}else{
   echo  "the connection was has connected";
}



    echo "<pre>";
    print_r($_POST);
 $fname=$_POST['fullname'];
$Email=$_POST['email'];
$Phone=$_POST['phone'];
$Licence=$_POST['license'];
$Expreance=$_POST['drivingexperience'];
$Detail=$_POST['vehicledetails'];
$Address=$_POST['address'];

echo $fname;
$sql="INSERT INTO `joinnig` ( `NAME`, `EMAIL`, `NUBMER`, `Driver's License Number:`, `Driving Experience (in years):`, `Vehicle Details`, `ADDRESS`) VALUES ( '$fname', '$Email', '$Phone', '$Licence', '$Expreance', '$Detail ', '$Address')";
$result=mysqli_query($conn,$sql);
// echo "<pre>";
   

if($result){
    echo "the connection is ready";

}else{
    echo "connection not connected".mysqli_queryerror();
}

?>