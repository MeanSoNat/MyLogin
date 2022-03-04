<?php
    //$getID = $_POST['getid'];
    isset( $_POST['getid'] ) ? $getID = $_POST['getid'] : $getID = "";
    $getPass = $_POST['getpassword'];
    //isset( $_POST['getPass'] ) ? $getID = $_POST['getpass'] : $getPass = "";

    $password = md5($getPass);
    //echo $password;
    $link = mysqli_connect("localhost", "root", "", "datastudent");
    if (!$link) {
        exit('cannot connect to database.');
    }

    $sql = "SELECT * FROM information_student Where password_id='$password' and STID='$getID'";
    $res = mysqli_query($link, $sql);
    if (!$data = mysqli_fetch_array($res)){
        echo "cannot password/id incorrect";
        echo "<a href=login.html>back to login</a>";    
    } else {
        echo "Login successfull!" . "<br>";
        echo "<tr>";
        echo "<td>Hello {$data['FName_student']} {$data['LName_student']}  <br></td>";
        echo "</tr>";
        echo "<a href = list.php>to list    </a>";
        echo "<a href = login.html>to logout</a>";
    }
    mysqli_close($link);
?>