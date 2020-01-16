<?php
    $link = mysqli_connect("localhost", "root", "", "PNTraining");

    if (isset($_POST['submit'])) {
        $id=$_POST['id'];
        $gname = $_POST['gname'];
        $mtype = $_POST['mtype'];
        $qty = $_POST['qty'];
        $price = $_POST['price'];

        $query = "UPDATE persons set generic_name='". $gname . "', medicine_type='". $mtype ."',
                    quantity='". $qty ."',price='". $price ."' where id='".$id."'"; 
        // echo $query;
        $result = mysqli_query($link, $query);// or die ( mysqli_error($mysqli));

        header("Location: Dashboard.php"); 
    }
?>