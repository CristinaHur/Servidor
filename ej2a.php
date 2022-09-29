<HTML>
<HEAD><TITLE> EJ2-Arrays unidimensionales </TITLE></HEAD>
<BODY>
<?php
$impares = array();
$aux = 1;
$sum = 0;
$valor = 1;
for ( $i=0;$i < 20; $i++){
  
    $impares[$i] = $aux;
    $aux += 2;
}
//var_dump($impares);


$sumap=0;//Para ir acumulado la suma de los valores de las celdas pares
$sumai=0;//para ir accumulando la suma de los valores de las celdas impares
for ( $i=0;$i < 20; $i++){  
    if($i%2==0)//si el valor del indice es par:
	  $sumap=$sumap+$impares[$i];//se suma ese valor en la suma par 
  else //Si no lo es (porque es impar)
      $sumai=$sumai+$impares[$i];//se suma ese valor en la suma impar
}
echo "La suma de las celdas pares es: ".$sumap."<BR>";
echo "La suma de las celdas impares es: ".$sumai."<BR>";
$mediaP=$sumap/10;
$mediaI=$sumai/10;
echo "La media de las celdas pares es: ".$mediaP. "<br>";
echo "La media de las celdas impares es: ".$mediaI;
?>
</BODY>
</HTML>
