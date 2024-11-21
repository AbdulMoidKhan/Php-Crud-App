<?php
require('includes/db.php');
if(isset($_POST["delete"])){
    $id = $_POST['myid'];
    $sql = "delete from users where id=$id";
    $res  = mysqli_query($con,$sql);
    if($res){
        header("location:show.php");
        exit;
    }
    else{
        echo "Not Deleted";
    }
}d
?>

<form method="post">
    <input type="text" name="myid" value="<?php echo $_GET['kuchbhi'];?>">
    <input type="submit" name="delete" value="submit">
 </form>