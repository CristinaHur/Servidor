<?php
//Recogida parametros
$servername="localhost";
$username="root";
$password="rootroot";
$dbname="comprasweb";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


?>

<HTML>
    <HEAD> <TITLE>EMPLEADOS </TITLE>
    <link href="css.css" rel="stylesheet" type="text/css" />
    </HEAD>
    <BODY>
    
    
    <H1>CONSULTA STOCK</h1>
    <form name='mi_formulario' action='conconstock.php' method='POST'>
    
 

    <label for="prod" class="sr-only">Productos</label>
    <select class="form-control" >
    <option value="">  <?php
    $query = $conn->prepare("SELECT NOMBRE FROM PRODUCTO");
    $query->execute();
    $data = $query->fetchAll();

    foreach ($data as $valores):
    echo '<option value="">'.$valores["NOMBRE"].'</option>';
    endforeach;
        ?>
    </option>
    </select>
   
    <input type="submit" value="Alta">
    
    
    
    
    </FORM>
    </BODY>
    </HTML>
    <?php
    $servername="localhost"; 
    $username="root";
    $password="rootroot";
    $dbname="comprasweb";

    
    
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ?>
    
