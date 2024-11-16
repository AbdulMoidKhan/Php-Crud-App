<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
require ('includes/db.php');

$sql = "select * from users";
$result = $con->query($sql);

?>
<body>
    <h1>Users List</h1>
    <table border="1px">
        <tr>
            <th>Name</th>
            <th>Data Of Birth</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Fav Color</th>
            <th>Created At</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['country']; ?></td>
            <td><?php echo $row['fav_color']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
        </tr>
        <?php endwhile;  ?>
    </table>
</body>
</html>


