<!DOCTYPE html>
<html>
    <head>
        <title>Patient Informartion</title>
        <link href="DataTableStyle.css"  rel="stylesheet">
    </head>
<body>

<?php
include("Connect.php");
$sql = "SELECT * FROM `PatientInformation`";
$result = mysqli_query($con,$sql);
echo"<h1>House of Health</h1>";
echo "<table>";
echo "<tr><th>Receptionist ID</th><th>Patient First Name</th><th>Patient Last Name</th><th>Patient ID</th></tr>";
while ($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>".$row['ReceptionistID']."</td>";
echo "<td>".$row['PatientFirstName']."</td>";
echo "<td>".$row['PatientLastName']."</td>";
echo "<td>".$row['PatientID']."</td>";
}
echo "</table>";
?>
<p><button id="home_button">Home</button></p>
<script src="DataTable1.js"></script>
</body>
</html>