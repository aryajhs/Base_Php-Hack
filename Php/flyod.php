<?php
echo "<html>";
echo "<body>";
echo"<table align=center border=2px bgcolor= white >";
$num=1;
for($count=1;$count<=5;$count++){
    for($col=1;$col<=$count;$col++){
        echo "<td>  $num  </td>" ;
        $num++;
    }
    echo "<br>";
    echo " </tr>";
    }

    echo "</table>";
    echo "</body>";
   
    echo " </html>";



?>