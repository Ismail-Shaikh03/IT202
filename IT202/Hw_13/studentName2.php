<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Homework 13</title>
        <style>
        table, th, td{
            border:1px solid black;
        }
        table{
            margin:auto;
        }
th, td{
    padding:1.75px;
}
</style>
    </head>
<body>
    <form method="post">
        <label for="studentName">Enter Student Name</label>
        <input id="studentName" name="studentName"><br>
        <input type="submit">
    </form>
    <?php
//Makes DB connection
$servername = "sql1.njit.edu";
$username = "is385";
$password = "Junior778!!";
$dbname = "is385";
$con =mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
 {
//echo "CONNECTED ";
}
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $studentName=$_POST["studentName"];
    $sql=$con->prepare("SELECT *
    FROM Student
    WHERE Name=?");
    $sql->bind_param("s",$studentName);
    $sql->execute();
    $result=$sql->get_result();
        echo "<table>";
        echo "<tr><th>Name</th><th>StudentID</th><th>Major</th></tr>";
        while($sql->fetch()) {
            echo "<tr>";
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['StudentID']."</td>";
            echo "<td>".$row['Major']."</td>";
            echo "</tr>";
    
    }
    echo "</table>";
    }
    else{
        echo "<script> alert('Student Name Is Not Found')</script>";
    }

?>
</body>
</html>