<?php
include("connection.php");
error_reporting(0);
$query="SELECT * FROM rescue";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
if ($total != 0) {
    ?> 
    <link rel="stylesheet" href="css/style2.css" type="text/css">
    <h1>Rescue Services</h1>
    <table id="customers">
        <tr>
            <td>Name</td>
            <td>Location</td>
        </tr>
        <?php
        while ($result = mysqli_fetch_assoc($data)) {
            echo "<tr>
            <td>" . $result['name'] . "</td>
            <td>" . $result['location'] . "</td>
            </tr>";

        }
}
else{
    echo "No record Found";
    }

?>
    </table>