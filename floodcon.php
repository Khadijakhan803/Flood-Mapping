<?php
include("connection.php");
error_reporting(0);
$query="SELECT * FROM floodcontrolinfrastructure";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
if($total!=0){
    ?> 
    <link rel="stylesheet" href="css/style2.css" type="text/css">
    <h1>FLOOD CONTROL INFRASTRUCTURE</h1>
    <table id="customers">
        <tr>
            <td>Number of Dams</td>
            <td>Number of Sea Walls</td>
            <td>Number of Tide Gates</td>
            <td>Number of Petrol Pumps</td>
        </tr>
        <?php 
            echo "
            <tr>
            <td>".$result['NoOfDams']."</td>
            <td>".$result['NoOfSeaWalls']."</td>
            <td>".$result['NoOfTideGates']."</td>
            <td>".$result['NoOfPumpStations']."</td>
            </tr>";
        
    }
else{
    echo "No record Found";
    }

?>
    </table>