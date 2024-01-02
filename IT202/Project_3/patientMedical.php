<!DOCTYPE html>
<html>
    <head>
        <title>Patient Medical Record</title>
        <link href="DataTableStyle.css"  rel="stylesheet">
    </head>
<body>

<?php
include("Connect.php");
$sql = "SELECT * FROM `PatientMedicalRecord`";
$result = mysqli_query($con,$sql);
echo"<h1>House of Health</h1>";
echo "<table>";
echo "<tr><th>Patient ID</th><th>Date of Birth</th><th>Age</th><th>Patient Adress and Number</th><th>Shots Given</th><th>Illnesses</th><th>Record ID</th></tr>";
while ($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>".$row['PatientID']."</td>";
echo "<td>".$row['DateOfBirth']."</td>";
echo "<td>".$row['Age']."</td>";
echo "<td>".$row['PatientAddressAndNumber']."</td>";
echo "<td>".$row['ShotsGiven']."</td>";
echo "<td>".$row['Illnesses']."</td>";
echo "<td>".$row['RecordID']."</td>";
}
echo "</table>";
?>
<p><button id="home_button">Home</button></p>
<script src="DataTable1.js"></script>
</body>
</html>