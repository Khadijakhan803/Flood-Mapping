<?php
include("connection.php");
error_reporting(0);
$query="SELECT * FROM propertydamage";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
if ($total != 0) {
    ?> 
    <link rel="stylesheet" href="css/style2.css" type="text/css">
    <h1>Property Damage</h1>
    <table id="customers">
        <tr>
            <td>Number of Houses</td>
            <td>Infrastructure Damage</td>
        </tr>
        <?php
        while ($result = mysqli_fetch_assoc($data)) {
            echo "<tr>
            <td>" . $result['NoOfHousesDamage'] . "</td>
            <td>" . $result['InfrastructureDamage'] . "</td> </tr>";

        }
}
else{
    echo "No record Found";
    }

?>
    </table>