<?php
include './../info.php';

$name= $_POST['userName'];
$message= $_POST['review'];
$noOfStars=$_POST['noOfStars'];
$imDBid=$_POST['id'];




$conn= mysqli_connect($server,$username,$password,$dbname);
if (!$conn) {
    echo "unsucessful";
}
else{
    echo "success";
}

$postQuery="INSERT INTO `reviews`(`userName`, `id`, `message`, `noOfStars`) VALUES ('$name','$imDBid','$message','$noOfStars')";
$result= mysqli_query($conn,$postQuery);
if($result){
    echo "<div style=`position:fixed;inset:0;background:green;height:calc(100vh - 70px);width:100vw;color:white;display:grid;place-items:center;top:70px;font-size:2rem`>Successfully submitted</div>";
}
else{
     echo "<div style=`position:fixed;inset:0;background:crimson;height:calc(100vh - 70px);width:100vw;color:white;display:grid;place-items:center;top:70px;font-size:2rem`>Some Problem Occured!</div>";

}
