<?php

function rekursif($i){
  echo "* <br>";
  $i--;
  if($i>0)
    rekursif($i);
}
rekursif(5);
?>