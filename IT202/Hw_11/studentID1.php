<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Homework 11</title>
    </head>
<body>
    <form method="post">
        <label for="studentID">Enter Student ID</label>
        <input type=number id="studentID" name="studentID"><br>
        <input type="submit">
    </form>
    <?php
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
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $studentID=$_POST["studentID"];
    $sql = "SELECT *
    FROM Student
    INNER JOIN Transcript
    ON Student.StudentID=Transcript.StudentID
    WHERE Student.StudentID=$studentID";
    $result=mysqli_query($con,$sql);
    if($result && mysqli_num_rows($result)>0){
        $_SESSION["studentID"]=$studentID;
        header("Location:studentID2.php");
        exit();
    }
    else{
        echo "<script> alert('Student ID Is Not Found')</script>";
    }

}
?>
</body>
</html>
