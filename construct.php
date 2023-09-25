<?php
$arr = array(10, 31, 63, 45, 12, 73, 93);
$n = sizeof($arr);
bubbleSort($arr, $n);
function bubbleSort(&$arr, $n)
{
    if ($n == 1)
        return;
  
    $count = 0;
    for ($i=0; $i<$n-1; $i++)
        if ($arr[$i] > $arr[$i+1]){
              list($arr[$i], $arr[$i+1]) = array($arr[$i+1], $arr[$i]);
            $count++;
        }
      
      if ($count==0)
           return;
  
    bubbleSort($arr, $n-1);
}
function printArray($arr, $n)
{
    for ($i=0; $i < $n; $i++)
        echo $arr[$i]." ";
    echo "\n";
}
echo "bubble Sorted array : \n";
printArray($arr, $n);

?>