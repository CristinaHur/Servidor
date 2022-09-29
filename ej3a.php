<HTML>
<HEAD><TITLE> EJ3-Arrays unidimensionales </TITLE></HEAD>
<BODY>
<?php
$binarios = array();
$aux = 1;


for ( $i=0;$i < 20; $i++){
  
    $binarios[$i] = $aux;
    $aux += 1;
}

echo "
<table border=1>
    <tr>
    <th>Indice</th>
    <th>Binario</th>
    <th>Octal</th>
  </tr>";

$cont = 0;
foreach ($binarios as $bin){
$bin=decbin($cont);
$oct=decoct($cont);

 	echo "<tr>
    <td>".$cont."</td>
    <td>".$bin."</td>
    <td>".$oct."</td>
  	</tr>";
    $cont += 1;

}
?>
</BODY>
</HTML>
