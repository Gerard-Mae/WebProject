<?php
    $fname=$_POST['fname'];
    $sname=$_POST['sname']; 
     $meal=$_POST['meal'];
    $number_of_people=$_POST['number_of_people'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    //database connection
    $conn=new mysqli('localhost','root','','likizo');
    if($conn->connect_error){
        die('Connection failed:'.$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into reservation(fname,sname,meal,number_of_people,phone,email)
        values(?,?,?,?,?,?)");
        $stmt->bind_param("ssssis",$fname,$sname,$meal,$number_of_people,$phone,$email);
        $stmt->execute();
        echo"Reservation succesful";
        $stmt->close();
        $conn->close();

    }
?>