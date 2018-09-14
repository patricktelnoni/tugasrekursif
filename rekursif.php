<?php
$iterator1 = 0;
$iterator2 = 0;
function rekursifBaris($i){    
    global $iterator1;
    $iterator1++;
    rekursifKolom($iterator1);
    echo "<br>";    
    if($iterator1<$i)
        rekursifBaris($i);
}
function rekursifKolom($j){
    global $iterator2;
    $iterator2++;
    echo "$iterator2";    
    if($iterator2<$j)
        rekursifKolom($j);
    else 
        $iterator2 = 0;
}
rekursifBaris(5);

?>