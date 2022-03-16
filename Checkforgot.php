<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask&Ans</title>
</head>
<body>
    <?php
        $getUsername = $_POST['Username'];
        $link = mysqli_connect("localhost", "root", "", "datastudent");
    $sql = "SELECT * FROM information_student Where Username='$getUsername'";
    $res = mysqli_query($link, $sql);

    while ($data = mysqli_fetch_array($res)) {
        echo "<form method='post' action='checkans.php?id={$data['ID']}'>";
        echo $data['Question'] . " <input type='text' name='Answer' placeholder='Write answer here!' >";
        echo "<input type='submit' value='Submit Answer'>";
        echo "</form>";
    }
    
    ?>
</body>
</html>