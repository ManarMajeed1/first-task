<?PHP
$server = "localhost";
$username = "root";
$password = "";
$DB = "firsttask"; 
$con = new mysqli($server,$username,$password,$DB);
$SQuery = "SELECT * FROM motors";
$result = $con->query($SQuery);
if ($result->num_rows > 0)
{
    while ($row2 =  $result->fetch_assoc())
    {
        $row = $row2;
    }
    $m1 = $row ['motor1'];
    $m2 = $row ['motor2'];
    $m3 = $row ['motor3'];
    $m4 = $row ['motor4'];
    $m5 = $row ['motor5'];
    $m6 = $row ['motor6'];
}
else 
{
    $m1 = 0;
    $m2 = 0;
    $m3 = 0;
    $m4 = 0;
    $m5 = 0;
    $m6 = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Style.css">
    <title>First Task</title>
</head>
<body>
    <form action="<?php echo $_SERVER ["PHP_SELF"];?>" method="post">
    <div class= "container">
        <div class= "card">
            <input type="range" name = "m1" id= "m1" min= "0" max="180" value="<?php echo $m1?>" oninput="ChangeS()">
            <label id= "n1"></label>
        </div>
        <div class= "card">
            <input type="range" name = "m2" id= "m2" min= "0" max="180" value="<?php echo $m2?>" oninput="ChangeS()">
            <label id= "n2"></label>
        </div>
        <div class= "card">
            <input type="range" name = "m3" id= "m3" min= "0" max="180" value="<?php echo $m3?>" oninput="ChangeS()">
            <label id= "n3"></label>
        </div>
        <div class= "card">
            <input type="range" name = "m4" id= "m4" min= "0" max="180" value="<?php echo $m4?>" oninput="ChangeS()">
            <label id= "n4"></label>
        </div>
        <div class= "card">
            <input type="range" name = "m5" id= "m5" min= "0" max="180" value="<?php echo $m5?>" oninput="ChangeS()">
            <label id= "n5"></label>
        </div>
        <div class= "card">
            <input type="range" name = "m6" id= "m6" min= "0" max="180" value="<?php echo $m6?>" oninput="ChangeS()">
            <label id= "n6"></label>
        </div>
        <button type="submit">Save</button>
    </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $motor1 = $_POST['m1'];
            $motor2 = $_POST['m2'];
            $motor3 = $_POST['m3'];
            $motor4 = $_POST['m4'];
            $motor5 = $_POST['m5'];
            $motor6 = $_POST['m6']; 
            $insertt = "INSERT INTO motors(motor1, motor2, motor3, motor4, motor5, motor6) VALUES ('$m1','$m2','$m3','$m4','$m5','$m6')";
            $con->query($insertt);
            header("Location: \C:\xampp\htdocs\smart method\first");
        }
        ?>
    </form>
    <script>
        var m1 = document.getElementById('m1');
        var n1 = document.getElementById('n1');
        n1.innerHTML = m1.value;
        var m2 = document.getElementById('m2');
        var n2 = document.getElementById('n2');
        n2.innerHTML = m2.value;
        var m3 = document.getElementById('m3');
        var n3 = document.getElementById('n3');
        n3.innerHTML = m3.value;
        var m4 = document.getElementById('m4');
        var n4 = document.getElementById('n4');
        n4.innerHTML = m4.value;
        var m5 = document.getElementById('m5');
        var n5 = document.getElementById('n5');
        n5.innerHTML = m5.value;
        var m6 = document.getElementById('m6');
        var n6 = document.getElementById('n6');
        n6.innerHTML = m6.value;
        
        function ChangeS()
        {
            n1.innerHTML = m1.value;
            n2.innerHTML = m2.value; 
            n3.innerHTML = m3.value;
            n4.innerHTML = m4.value;
            n5.innerHTML = m5.value;
            n6.innerHTML = m6.value;
        }
    </script>
</body>
</html>