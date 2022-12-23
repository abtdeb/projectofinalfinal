<?php

   /* echo "<pre>";
    var_dump($_GET);
    echo "<pre>";*/

    include("conexion.php");
    $conexion = conexion();
    $id = $_GET["id"];

   

    $sql = "SELECT * FROM lista_oradores WHERE id = $id";

    $query = mysqli_query($conexion, $sql);

    $fila = mysqli_fetch_assoc($query);

   
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <!-- Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,400;1,300&display=swap" rel="stylesheet">

        <!--Css-->
        <link rel="stylesheet" href="estilos.css">

        <title>Conferencia BA </title>
    </head>
    <header>
                <!--Barra de Navegacion-->
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <a class="navbar-brand text-light" href="index.php">
                            <img src="./img/codoacodo.png" alt="Logo" width="120" height="80" class="d-inline-block align-text-center">
                            Conf Bs As
                        </a>
                        <!-- LINKEAR-->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"data-bs-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent"> 
                            <!--nav items-->
                            <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="/index.php">La conferencia </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-secondary" aria-current="page" href="/index.php">El lugar y la fecha</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-secondary" aria-current="page" href="/index.php">Conviertete en un orador</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  text-success" href="tickets.php">Comprar Tickets</a>
                            </li>
                                                
                            </ul>
                        
                        </div>
                    </div>
                </nav>
    </header>
    <body>
        <main>
            <section class="container mt-4" >

                <div class="encabezado  mb-4" >
                    <h2>Modifique los Datos</h2>    
                </div>

                <div class="modiform  ">
                    <form action="modificar.php"  method="post">

                        <input type="text" name="id" id="" value="<?php echo $fila["id"]?>" hidden>
                                
                        <input type="text"  name="nombre" id=""   value="<?php echo $fila["Nombre"]?>">
                        
                        <input type="text"  name="apellido" id="" value="<?php echo $fila["Apellido"]?>">

                        <input type="mail" name="mail"   id="" value="<?php echo $fila["Mail"]?>">
                            
                        <input type="text" name="tema"  id=""  value="<?php echo $fila["Tema"]?>">
                                                
                           
                    </form>

                    <!--Botones-->
                    <div class="bton">
                        <button type="submit" id="" value="modificar">Modificar</button>   
                        <a href="index.php"><button type="submit" id="" value="Volver" >Volver</button></a>   
                     </div>
                </div>
            </section>  
        </main>



     <!--   <footer>
            <div class="container-fluid pie ">
                <a href="" >Preguntas frecuentes</a>
                <a href="">Contáctanos</a>
                <a href="">Prensa</a>
                <a href="">Conferencias</a>
                <a href="">Términos y condiciones</a>
                <a href="">Privacidad</a>
                <a href="">Estudiantes</a>
            </div>
        </footer> -->

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
        <script src="Indscripts.js"></script>
        
    </body>
</html>   