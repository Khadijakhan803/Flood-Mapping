<?php
include("connection.php");
error_reporting(0);
$query="SELECT * FROM agriculturallanddamage";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
if ($total != 0) {
    ?> 
    <link rel="stylesheet" href="css/style2.css" type="text/css">
    <h1>Agriculture Damage</h1>
    <table id="customers">
        <tr>
            <td>Land Owner Name</td>
            <td>Hospital Address</td>
        </tr>
        <?php
        while ($result = mysqli_fetch_assoc($data)) {
            echo "<tr>
            <td>" . $result['LandOwnerName'] . "</td>
            <td>" . $result['Cost'] . "</td> </tr>";

        }
}
else{
    echo "No record Found";
    }

?>
    </table>