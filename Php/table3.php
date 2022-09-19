<?php
$num=0;
echo "<table style='tab-size:5px;border: 7px solid black;'>";
for ($i=0;$i<10;$i++){
    echo "<tr>";
    for($k=0 ; $k <10 ; $k++){
        echo " <td style='border: 5px solid aqua;text-align: center;width: 50px;height: 50px'><b>$num</b></td>";
        $num++;
    }echo '</tr>';
}echo '</table>'
?>