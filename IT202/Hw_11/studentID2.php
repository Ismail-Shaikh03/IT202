<!DOCTYPE html>
<html>
    <head>
        <title>Homework 11</title>
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
<?php
session_start();
if(!isset($_SESSION["studentID"])){
    header("Location:studentID1.php");
    exit();
}
//Makes DB connection
$servername = "sql1.njit.edu";
$username = "is385";
$password = "Junior778!!";
$dbname = "is385";
$con = mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
 {
//echo "CONNECTED ";
}
$studentID=$_SESSION["studentID"];
$sql = "SELECT *
FROM Student
INNER JOIN Transcript
ON Student.StudentID=Transcript.StudentID
WHERE Student.StudentID=$studentID";

$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    echo "<table>";
    echo "<tr><th>Name</th><th>StudentID</th><th>Major</th><th>Course</th><th>Grade</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['StudentID']."</td>";
        echo "<td>".$row['Major']."</td>";
        echo "<td>".$row['Course']."</td>";
        echo "<td>".$row['Grade']."</td>";
        echo "</tr>";

}
echo "</table>";
}
?>
<p><button onclick="location.href='studentID1.php' " id="home_button">Home</button></p>
</body>
</html>