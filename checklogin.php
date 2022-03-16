<?php
    $getName = $_POST['Username'];
    //isset( $_POST['getid'] ) ? $getID = $_POST['getid'] : $getID = "";
    $getPass = $_POST['getpassword'];
    //isset( $_POST['getPass'] ) ? $getID = $_POST['getpass'] : $getPass = "";

    $password = md5($getPass);
    //echo $password;
    $link = mysqli_connect("localhost", "root", "", "datastudent");
    if (!$link) {
        exit('cannot connect to database.');
    }

    $sql = "SELECT * FROM information_student Where Password='$password' and Username='$getName'";
    $res = mysqli_query($link, $sql);
    if (!$data = mysqli_fetch_array($res)){
        echo "cannot password/id incorrect";
        echo "<a href=login.html>back to login</a>" . "<br>";
        echo "<a href='forgotpassword.html?'>Forgot password?</a>";
    
    } else {
        echo "Login successfull!" . "<br>";
        echo "<tr>";
        echo "<td>Hello {$data['Username']} {$data['Name']}  <br></td>";
        echo "</tr>";
        echo "<a href = list.php>to list    </a>";
        echo "<a href = login.html>to logout</a>";
    }
    mysqli_close($link);
?>