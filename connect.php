<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //database connection
    $con = new mysqli('localhost','root','','myportfolio');
    if($con -> connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $con->prepare("insert into contactmessage (name, email, message)
        value(?, ?, ?)");
        $stmt->bind_param("sss",$name, $email, $message);
        $stmt->execute();
        echo "Message sent..";
        $stmt->close();
        $con->close();

        header("Location: index.php");
        exit();
    }

?>