<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <?php
    require "includes/db.php";

 if(isset($_POST["id"])){
    $id = $_POST["id"];
    $name = trim($_POST['name']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $color = $_POST['color'];

    $query = "update users set name='$name', dob='$dob', gender='$gender',country='$country',fav_color='$color' where id ='$id'";
    $result = mysqli_query($con,$query);

    if($result){
        header("location:show.php");
    }
    else{
        echo "Not Updated";
    }
 }
 else{
    if(isset($_GET["updateData"]))
    {
        $id = trim($_GET["updateData"]);
        // echo $id;

        $query = "select * from users where id = $id";

        $res = mysqli_query($con,$query);

        while($data= mysqli_fetch_array($res)){
           $id = $data[0];
           $name = $data[1];
           $dob = $data[2];
           $gender = $data[3];
           $country = $data[4];
           $color = $data[5];
        // echo $id.$name.$dob.$gender.$country.$color;
    }
}
 }
    ?>
    <div class="container">
        <h1>Update Data</h1>
        <form method="post">
            <input type="hidden" name="id" value=" <?php echo $id; ?>"
            <label >Name</label>
            <input type="text" name="name" value="<?php echo $name  ?>">
            
            <br><br>
    
            <label >Date of Birth</label>
            <input type="date" name="dob" value="<?php echo $dob  ?>">
            
            <br><br>
    
            <label >Gender</label>
            <br>
            <label >Male</label>
            <input type="radio" name="gender" value="male" <?php echo $gender=="male"?"checked":""; ?>>
            <label >Female</label>
            <input type="radio" name="gender" value="female" <?php echo $gender=="female"?"checked":""; ?>>
            
            <br><br>
    
            <label >Country</label>
            <select name="country" id="">
                <option value="pakistan" <?php echo $country=="pakistan"?"selected":""; ?>>Pakistan</option>
                <option value="india" <?php echo $country=="india"?"selected":""; ?>>India</option>
            </select>
    
            <br><br>
    
            <label >Fav Color <?php echo $color;?></label>
            <input type="color" name="color" value="<?php echo $color;  ?>" >
    
            <br><br>
    
            <input type="submit" value="Update Data">
            <a href="show.php">Back to Data</a>
        </form>
    </div>
</body>
</html>