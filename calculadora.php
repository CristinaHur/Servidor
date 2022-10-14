<?php
$operando1=$_REQUEST['operando1'];
$operando2=$_REQUEST['operando2'];
$tipo=$_REQUEST['tipoOpe'];

echo "<h1>CALCULADORA</h1>";
if($tipo == "suma"){
    $res = $operando1 + $operando2;
    echo $operando1."+".$operando2."=".$res;
}else if($tipo == "resta"){
    $res = $operando1 - $operando2;
    echo $operando1."-".$operando2."=".$res;
}else if($tipo == "producto"){
    $res = $operando1 * $operando2;
    echo $operando1."*".$operando2."=".$res;
}else if($tipo == "division"){
    $res = $operando1 / $operando2;
    echo $operando1."/".$operando2."=".$res;
}

?>