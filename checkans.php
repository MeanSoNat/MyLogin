<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <?php
     $getAns = $_POST['Answer'];
     $getID = $_GET['id'];
     $link = mysqli_connect("localhost", "root", "", "datastudent");
     $sql = "SELECT * FROM information_student where ID='$getID' and Answer='$getAns'";
     $res = mysqli_query($link, $sql);
     
     if (!$data = mysqli_fetch_array($res)) {
        echo "Your answer incorrect.";
        echo "<a href='login.html'>Login</a>";
     } else {
         echo "your answer is correct please enter a new password.";

         echo "<form method='post' action='passwordupdate.php?id={$data['ID']}'>";
            echo "Enter new password:<input type='password' name='password' placeholder='New password!!'>";
            echo "<input type='submit' value'submit'>";
         echo "</form>";
     }

    ?>
</body>
</html>