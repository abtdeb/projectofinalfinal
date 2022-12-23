<?php 

    echo "<pre>";
    var_dump($_POST);
    echo "<pre>";

    
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $mail = $_POST["mail"];
    $tema = $_POST["tema"];
   
      

    include("conexion.php");
    $conexion = conexion();
  

    $sql = "UPDATE lista_oradores SET nombre = '$nombre', apellido = '$apellido', mail =  '$mail', tema = '$tema' WHERE id = $id";

    $query = mysqli_query($conexion, $sql);

    if($query){
        Header("location: index.php");
    }

 

?>