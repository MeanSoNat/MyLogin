<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password_Update</title>
</head>
<body>
    <?php
    $getID = $_GET['id'];
    $getPassword = $_POST['password'];
    $NewPassword = md5($getPassword);
    $link = mysqli_connect("localhost", "root", "", "datastudent");

     $sql = "UPDATE information_student SET Password='$NewPassword' where ID='$getID'";
     $res = mysqli_query($link, $sql);
     echo $sql . '<br>';
     if (!$res){
          echo "cannot change Password.";
     } else {
          echo "Password Changed.";
     }
     echo "<br><br><a href='login.html' class='btn-grad' role='button'>Back to Login</a>";

?>
</body>
</html>