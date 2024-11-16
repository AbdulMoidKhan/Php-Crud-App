<?php

require "includes/db.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $color = $_POST['color'];

    $sql = "insert into users(name,dob,gender,country,fav_color) values('$name','$dob','$gender','$country','$color')";

    if($con->query($sql) === true)
    {
        echo "New Record Inserted";
    }
    else{
        echo "Something went wrong";
    }
}






?>