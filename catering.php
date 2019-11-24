<?php
    $fname=$_POST['fname'];
    $sname=$_POST['sname']; 
     $type_of_event=$_POST['type_of_event'];
    $number_of_people=$_POST['number_of_people'];
    $type_of_meal=$_POST['type_of_meal'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    //database connection
    $conn=new mysqli('localhost','root','','likizo');
    if($conn->connect_error){
        die('Connection failed:'.$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into catering(fname,sname,type_of_event,number_of_people,type_of_meal,email,phone)
        values(?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssi",$fname,$sname,$type_of_event,$number_of_people,$type_of_meal,$email,$phone);
        $stmt->execute();
        echo"You have successfully booked for catering services";
        $stmt->close();
        $conn->close();

    }
?>