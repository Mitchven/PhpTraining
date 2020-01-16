<?php

    // include("Login.php");
    // session_start();
    // if(session_destroy()) {
    //     header("Location: Dashboard.php");
    // }
    $connection = mysqli_connect("localhost","root","","PNTraining");

    if(isset($_POST['submit'])){
        
        header("Location:Dashboard.php");
        // $username = $_POST['uname'];
        // $password = $_POST['psw'];
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];

        if($uname != '' || $pass != ''){ 
            $sql = "INSERT INTO medicine (uname, pass) VALUES ('$uname,$pass')";

            $query = mysqli_query($connection, $sql);
            echo "<span>Inserted Successfully.</span>";
        }else{
            echo "<p>Failed insertion!<br/> Fields required.";
        }
    }
    mysqli_close($connection);//Closing connection


?>