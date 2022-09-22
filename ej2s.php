<HTML>
<HEAD><TITLE> EJ2 </TITLE></HEAD>
<BODY>

<?php



$ip="192.18.16.204";
$num=$ip;
$ip1=substr($ip,0,strpos($ip,'.'));
$ip=substr($ip,strpos($ip,'.')+1);
$ip2=substr($ip,0,strpos($ip,'.'));
$ip=substr($ip,strpos($ip,'.')+1);
$ip3=substr($ip,0,strpos($ip,'.'));
$ip=substr($ip,strpos($ip,'.')+1);
$ip4=substr($ip,0);
$binario1=str_pad(decbin($ip1), "8", "0", STR_PAD_LEFT);
$binario2=str_pad(decbin($ip2), "8", "0", STR_PAD_LEFT);
$binario3=str_pad(decbin($ip3), "8", "0", STR_PAD_LEFT);
$binario4=str_pad(decbin($ip4), "8", "0", STR_PAD_LEFT);
echo ("IP ".$num." en binario es ".$binario1.".".$binario2.".".$binario3.".".$binario4);





?>

</BODY>
</HTML>