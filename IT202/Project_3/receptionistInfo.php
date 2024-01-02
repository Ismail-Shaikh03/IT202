<!DOCTYPE html>
<html>
    <head>
        <title>Receptionist Informartion</title>
        <link href="DataTableStyle.css"  rel="stylesheet">
    </head>
<body>

<?php
include("Connect.php");
$sql = "SELECT * FROM `ReceptionistsInformation`";
$result = mysqli_query($con,$sql);
echo"<h1>House of Health</h1>";
echo "<table>";
echo "<tr><th>Receptionist First Name</th><th>Receptionist Last Name</th><th>Receptionist Password</th><th>Receptionist ID</th><th>Receptionist Phone Number</th><th>Receptionist Email Address</th></tr>";
while ($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>".$row['ReceptionistFirstName']."</td>";
echo "<td>".$row['ReceptionistLastName']."</td>";
echo "<td>".$row['ReceptionistPassword']."</td>";
echo "<td>".$row['ReceptionistID']."</td>";
echo "<td>".$row['ReceptionistPhone']."</td>";
echo "<td>".$row['ReceptionistEmail']."</td>";
}
echo "</table>";
?>
<p><button id="home_button">Home</button></p>
<script src="DataTable1.js"></script>
</body>
</html>