<!DOCTYPE html>
<html>
    <head>
        <title>Patient Procedure and Appointments</title>
        <link href="DataTableStyle.css"  rel="stylesheet">
    </head>
<body>

<?php
include("Connect.php");
$sql = "SELECT * FROM `PatientAppointmentsAndProcedures`";
$result = mysqli_query($con,$sql);
echo"<h1>House of Health</h1>";
echo "<table>";
echo "<tr><th>Patient ID</th><th>Appointment Date</th><th>Appointment Type</th><th>Procedure Date</th><th>Procedure Type</th><th>Doctor</th><th>Appointment and Procedure ID</th></tr>";
while ($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>".$row['PatientID']."</td>";
echo "<td>".$row['AppointmentDate']."</td>";
echo "<td>".$row['AppointmentType']."</td>";
echo "<td>".$row['ProcedureDate']."</td>";
echo "<td>".$row['ProcedureType']."</td>";
echo "<td>".$row['Doctor']."</td>";
echo "<td>".$row['AppointmentProcedureID']."</td>";
}
echo "</table>";
?>
<p><button id="home_button">Home</button></p>
<script src="DataTable1.js"></script>
</body>
</html>