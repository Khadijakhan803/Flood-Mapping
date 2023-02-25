<?php
include("connection.php");
error_reporting(0);
$query="SELECT * FROM hospitals";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
if ($total != 0) {
    ?> 
    <link rel="stylesheet" href="css/style2.css" type="text/css">
    <h1>Hospitals</h1>
    <table id="customers">
        <tr>
            <td>Hospital Name</td>
            <td>Hospital Address</td>
            <td>Number Of Doctors</td>
            <td>Number Of Nurses</td>
            <td>Health Kits Available</td>
        </tr>
        <?php
        while ($result = mysqli_fetch_assoc($data)) {
            echo "<tr>
            <td>" . $result['HospitalName'] . "</td>
            <td>" . $result['HospitalAddress'] . "</td>
            <td>" . $result['NoOfDoctors'] . "</td>
            <td>" . $result['NoOfNurses'] . "</td>
            <td>" . $result['HealthKitsAvailable'] . "</td> </tr>";

        }
}
else{
    echo "No record Found";
    }

?>
    </table>