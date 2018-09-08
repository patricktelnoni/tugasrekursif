<?php

function rekursif($i){
  echo "$i <br>";
  $i--;
  if($i>0)
    rekursif($i);
}
rekursif(5);
?>