<?php


$fname=$_POST['fname'];
$sname=$_POST['sname']; 
$location1=$_POST['location1'];
$phone=$_POST['phone'];
$order_s=$_POST['order'];
    
    //database connection
    $conn=new mysqli('localhost','root','','likizo');
  


 if($conn->connect_error){
    die('Connection failed:'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into orders_placed(fname,sname,location1,phone,orders)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssis",$fname,$sname,$location1,$phone,$order_s);
    $stmt->execute();
    echo"You have successfully ordered.";
    $stmt->close();
    $conn->close();

}
?>