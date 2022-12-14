<HTML>
    <HEAD> <TITLE> DAR DE ALTA CATEGORÍAS </TITLE>
    <link href="css.css" rel="stylesheet" type="text/css" />
    </HEAD>
    <BODY>
    
    
    <H1>CATEGORÍAS</h1>
    <form name='mi_formulario' action='comaltacat.php' method='POST'>
    
 
    Nombre:
    <input type='text' name='nombre' value=''><br><br>

   
    <input type="submit" value="Alta">
    
    
    
    
    </FORM>
    </BODY>
</HTML>
    

<?php

$servername="localhost"; 
$username="root";
$password="rootroot";
$dbname="comprasweb";
$cat=["nombre"];


    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $consulta = $conn->prepare($conn,"SELECT MAX(id_categoria) as id FROM categoria LIMIT 1");
    //$consulta = mysqli_fetch_array($consulta,MYSQL_ASSOC);
    $codigo = (empty($consulta['id']) ?  : $consulta['id']+=1);
   // $sql="INSERT INTO categoria (id_categoria) VALUES (`C$codigo`)";
    $consulta1 = $conn->prepare("INSERT INTO categoria (id_categoria) VALUES (:codigo)");
    $stmt->bindParam(':codigo', `C`.$codigo);
    $stmt->execute();
    
    if(!$consulta){die('Error');}
    
        $stmt = $conn->prepare("INSERT INTO categoria (nombre) VALUES (:nombre)");
        $stmt->bindParam(':nombre', $cat);
        $stmt->execute();
   
 ?>
