<?php
//$num=528212;
//if($num>0) echo ($num-1)%9+1;
//else echo 0;
$arr=[1,3,4,5,7,8,10];
//$res=[];
//$res=array_diff($arr,10);
$res=array_diff([1,2,3,4,5,6,7,8,9,10],$arr);
print_r($res);

?>