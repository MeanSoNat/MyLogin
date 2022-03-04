<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$link = mysqli_connect('localhost', "root", "", "datastudent");
if (!$link){
    exit('cannot connect database.');
}
$sql = "SELECT * FROM information_student";
$res = mysqli_query($link, $sql);

echo "<table>";
    while ($data = mysqli_fetch_array($res)){
        echo "<tr>";
            echo "<td>{$data['ID']}</td>";
            echo "<td>{$data['FName_student']}</td>";
            echo "<td>{$data['LName_student']}</td>";
            echo "<td>{$data['STID']}</td>";
        echo "</tr>";
    }
echo "</table>";
mysqli_close($link);

?>
<a href="login.html">To login</a>
</body>
</html>