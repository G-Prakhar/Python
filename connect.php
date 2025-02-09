<?php
    $signupName = $_POST['signupName'];
    $signupEmail = $_POST['signupEmail'];
    $signupPassword = $_POST['signupPassword'];

    $conn = new mysqli('localhost', 'root', 'mydb');
    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(signupName, signupEmail, signupPassword)
            values(?,?,?)");
        $stmt->bind_param("sss", $signupName, $signupEmail, $signupPassword);
        $stmt->execute();
        echo "registered successfully...";
        $stmt->close();
        $conn->close();
    }
?>