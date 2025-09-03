<?php
$arr[]=array();
for($i=0;$i<10;$i++){
    $arr[$i]=$i+1;

}
echo"Array element by for each are:<br>";
foreach($arr as $value ){
echo $value."<br>";
}
?>