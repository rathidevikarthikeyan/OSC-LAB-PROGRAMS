<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>View page</h1>

    <table border="1px">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>message</th>
        </tr>
        <?php 

        $sql="SELECT * from feedback";
        $result=mysqli_query($conn,$sql);

        while($row=mysqli_fetch_assoc($result)){

        ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['message'];?></td>
</tr>
<?php
 }
        ?>
</table>
<a href="./index.php">Back to Form</a>
</body>
</html>