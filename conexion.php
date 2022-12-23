<?php
    function conexion(){
        $servidor =  "localhost";
        $usuario = "root";
        $clave = "";
    
        $baseDatos = "oradores";
    
        // conectar con el servidor
    
        $conectar = mysqli_connect($servidor, $usuario, $clave);
        // selccionar base de datos
    
        mysqli_select_db($conectar, $baseDatos);
       /* echo "<pre>";
        print_r($conectar);
        echo "<pre>";*/
        
        
        return $conectar;
        include "headerHtml.php";
    }




?>