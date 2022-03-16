<?php
    $Username = $_POST['Username'];
    $Name = $_POST['Name'];
    $Password = $_POST['Password'];
    $Tel = $_POST['Tel'];
    $Email = $_POST['Email'];
    $Question = $_POST['Question'];
    $Answer = $_POST['Answer'];

    $enpass = md5($Password);
    $link = mysqli_connect('localhost', "root", "", "datastudent");

    if (!$link) {
        exit('cannot insert to database.');
    }

    $sql = "insert into information_student values('', '$Username', '$Name', '$enpass', '$Tel', '$Email', '$Question', '$Answer')";
    echo $sql . "<br> inserted into database.";

    $result = mysqli_query($link, $sql);
    if (!$result) {
        exit("cannot insert into database.");
    }

    echo "<a href =  list.php>to list</a>";
?>