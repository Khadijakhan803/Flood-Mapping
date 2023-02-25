<?php
include("connection.php");
error_reporting(0);
$query="SELECT * FROM REGION WHERE RegionLocation='SINDH'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
if ($total != 0) {
    ?> 
    <link rel="stylesheet" href="css/style2.css" type="text/css">
    <h1>SINDH</h1>
    <table id="customers">
        <tr>
            <td>Region Name</td>
            <td>Region Location</td>
            <td>Region State</td>
            <td>Region Postcode</td>
            <td>Region Info</td>
        </tr>
        <?php
        while ($result = mysqli_fetch_assoc($data)) {
            echo "<tr>
            <td>" . $result['RegionName'] . "</td>
            <td>" . $result['RegionLocation'] . "</td>
            <td>" . $result['RegionState'] . "</td>
            <td>" . $result['RegionPostcode'] . "</td>
            <td>" . $result['Regioninfo'] . "</td> </tr>";

        }
}
else{
    echo "No record Found";
    }

?>
    </table>