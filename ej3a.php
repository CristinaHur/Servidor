<HTML>
<HEAD><TITLE> EJ3-Arrays unidimensionales </TITLE></HEAD>
<BODY>
<?php
$binarios = array();
$aux = 0;


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


foreach ($binarios as $numbin){
$bin=decbin($numbin);
$oct=decoct($numbin);

 	echo "<tr>
    <td>".$numbin."</td>
    <td>".$bin."</td>
    <td>".$oct."</td>
  	</tr>";
    $cont += 1;

}
?>
</BODY>
</HTML>
