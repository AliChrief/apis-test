<?php
$results=0;
if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
    $a=$_POST["a"];
    $b=$_POST["b"];
    $c=$_POST["c"];
    $results=pow($a,3) + ($b*3)-($a/$b);
}
else{
     echo "not enough variables";
}

?>
