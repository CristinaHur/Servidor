<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>

<?php


$ip="192.18.16.204";
$num=$ip;$ip1=substr($ip,0,strpos($ip,'.'));
$ip=substr($ip,strpos($ip,'.')+1);
$ip2=substr($ip,0,strpos($ip,'.'));
$ip=substr($ip,strpos($ip,'.')+1);
$ip3=substr($ip,0,strpos($ip,'.'));
$ip=substr($ip,strpos($ip,'.')+1);
$ip4=substr($ip,0);
printf("Numero $num se representa en binario como %08b.%08b.%08b.%08b <br/>",$ip1,$ip2,$ip3,$ip4);
?>

</BODY>
</HTML>