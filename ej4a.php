<HTML>
<HEAD><TITLE> EJ4-Arrays unidimensionales </TITLE></HEAD>
<BODY>
<?php
$binarios = array();
$aux = 0;


for ( $i=0;$i < 20; $i++){
  
    $binarios[$i] = $aux;
    $aux += 1;
}



$binarios=array_reverse($binarios);

foreach ($binarios as $numbin){
	$bin=decbin($numbin);

	echo $bin."<br>";
 

}


?>
</BODY>
</HTML>