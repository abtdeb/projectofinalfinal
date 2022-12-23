<?php 

    echo "<pre>";
    print_r($_POST);
    echo "<pre>";

    include("conexion.php");
    $conexion = conexion();

    
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $mail = $_POST["mail"];
    $tema = $_POST["tema"];

    $sql = "INSERT INTO lista_oradores(id,nombre,apellido,mail,tema) VALUES(NULL,'$nombre','$apellido', '$mail','$tema')";

    $query = mysqli_query($conexion, $sql);

    if($query){
        Header("Location: index.php");
    }

   
?>