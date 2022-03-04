<?php
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $student_ID = $_POST['studentid'];
    $password = $_POST['password'];

    $enpass = md5($password);
    $link = mysqli_connect('localhost', "root", "", "datastudent");

    if (!$link) {
        exit('cannot insert to database.');
    }

    $sql = "insert into information_student values('', '$first_name', '$last_name', '$student_ID', '$enpass')";
    echo $sql . "<br> inserted into database.";

    $result = mysqli_query($link, $sql);
    if (!$result) {
        exit("cannot insert into database.");
    }

    echo "<a href = list.php>to list</a>";
?>