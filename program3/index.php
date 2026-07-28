 <?php
include("db.php");

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO feedback(name, email, message)
            VALUES('$name', '$email', '$message')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Feedback submitted Successfully');</script>";
    }
    else{
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback System</title>
</head>
<body>
    <form action="" method="post">
        <label>Name</label>
        <input type="text" name="name" required>

         <label>Email</label>
        <input type="text" name="email" required>

        <label>Feedback</label>
        <textarea name="message" rows="5" required></textarea>
        <input type="submit" name ="submit" value="submit Feedback"/>
    </form>
   <a href="./view.php">View Data</a>
</body>
</html>