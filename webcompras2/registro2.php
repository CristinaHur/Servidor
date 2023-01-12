<?php
$servername="localhost"; 
$username="root";
$password="rootroot";
$dbname="comprasweb";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//FUNCTION registro(){
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$nifnie=$_POST['nif'];
$nombre= $_POST['nombre'];
$apellido=$_POST['apellido'];
$codigoP=$_POST['cp'];
$direcc=$_POST['direccion'];
$ciu=$_POST['ciudad'];
$sql1 =  $conn->prepare("SELECT nif FROM `cliente`");

    if($nifnie == '' or $nombre == '' or $apellido == ''  or $codigoP == '' or $direcc or $ciu) { 
        echo "Por favor llene todos los campos."; 
    }
    elseif( $sql1==$nifnie){
      echo "Este usuario ya se ha registrado anteriormente" ;
     
    }
    else { 
            $sql =  $conn->prepare("INSERT INTO clientes (nif,nombre,apellido,cp,direccion,ciudad) VALUES (:nif,:nombre,:apellido,:cp,:direccion,:ciudad)"); 
            //mysql_query($sql);
            $sql->bindParam(':nif', $nifnie);
            $sql->bindParam(':nombre', $nombre);
            $sql->bindParam(':apellido', $apellido);
            $sql->bindParam(':cp', $codigoP);
            $sql->bindParam(':direccion', $direcc);
            $sql->bindParam(':ciudad', $ciu);
            $sql->execute();
        }
    
    $usuario=strtolower($nombre);
    $clave=strrev($apellido);
    $sql2 =  $conn->prepare("INSERT INTO usuarios (usuario,clave) VALUES (:usu,:cla)"); 
    $sql->bindParam(':usu', $usuario);
    $sql->bindParam(':cla', $clave);
    $sql2->execute();

    echo  "<p>Su usuario es: ". $usuario . "y su contraseña es: " .$clave."</p>";

    }


//capturar excepciones

catch(PDOException $error){

    
        echo "Error";

    }







$conn=null;




?>

 

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Registro</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <style type="text/css">

        body{ font: 14px sans-serif; }

        .wrapper{ width: 350px; padding: 20px; }

    </style>

</head>

<body>

    <div class="wrapper">

        <h2>Registro</h2>

        <p>Por favor complete este formulario para crear una cuenta.</p>

        <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">

         <div>

                <label>NIF/NIE</label>

                <input type="text" name="nif" class="form-control" >

                <span class="help-block"></span>

            </div>
            <div class="form-group">

                <label>Nombre</label>

                <input type="text" name="nombre" class="form-control">

                <span class="help-block"></span>

            </div>    

            <div class="form-group ">

                <label>Apellido</label>

                <input type="text" name="apellido" class="form-control">

               <span class="help-block"></span>

            </div>

           
                <div class="form-group">

                <label>Código Postal</label>

                <input type="text" name="cp" class="form-control">

                <span class="help-block"></span>

            </div>    

            <div class="form-group">

                <label>Dirección</label>

                <input type="text" name="direccion" class="form-control" >

                <span class="help-block"></span>

            </div>

            <div class="form-group">

                <label>Ciudad</label>

                <input type="text" name="ciudad" class="form-control">

                <span class="help-block"></span>

            </div>
       
            <div >

                <input type="submit" class="btn btn-primary" value="Ingresar">

                <input type="reset" class="btn btn-default" value="Borrar">

            </div>

            <p>¿Ya tienes una cuenta? <a href="comlogincli.php">Ingresa aquí</a>.</p>

        </form>

    </div>    

</body>

</html>
