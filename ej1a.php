<HTML>
<HEAD><TITLE> EJ1-Arrays unidimensionales </TITLE></HEAD>
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
var_dump($impares);
echo "
<table border=1>
    <tr>
    <th>Indice</th>
    <th>Valor</th>
    <th>Suma</th>
  </tr>";

$cont = 0;
foreach ($impares as $pos){
	$sum += $pos;
 	echo "<tr>
    <td>".$cont."</td>
    <td>".$pos."</td>
    <td>".$sum."</td>
  	</tr>";
    $cont += 1;

}

 
 
echo "

</table>
"
?>
</BODY>
</HTML>
