<?php 
    include("conexion.php");
    $conexion = conexion();

    $sql = "SELECT * FROM lista_oradores";

    $query = mysqli_query($conexion, $sql);





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
    <body>



        <header>
                    <!--Barra de Navegacion-->
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid">
                            <a class="navbar-brand text-light" href="">
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
                                    <a class="nav-link active text-light" aria-current="page" href="#losoradores">La conferencia </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-secondary" aria-current="page" href="#lufe">El lugar y la fecha</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-secondary" aria-current="page" href="#forms">Conviertete en un orador</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  text-success" href="tickets.php">Comprar Tickets</a>
                                </li>
                                                    
                                </ul>
                            
                            </div>
                        </div>
                    </nav>
        </header>

        <main>
            <!--CONFERENCIAS -->
            <section class="conferencia" id="bsasconf">

                <!--CARRUSEL-->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/aguas argentinas.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/obelisco.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/buenos-aires03.jpg" class="d-block w-100" alt="...">
                    </div>
                    </div>

                    <div class="container-fluid texto text-light">
                        <h1>Conf Bs As</h1>
                        <p>
                            Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el
                            el conocimiento y experiencia de los expertos que estan creando el futuro de Internet. Ven 
                            a conocer a miembros del evento, a otros estudiantes de Codo a Codo y  alos oradores de primer
                            nivel que tenemos para ti. Te esperamos!
                        </p>

                        <!--Botones-->
                        <div class="bton">
                            <button type="button" class="btn btn-outline-light"> <a href="#forms">  Quiero ser orador </a></button>
                            <button type="button" class="btn btn-success"> <a href="tickets.html"> Comprar tickets</a> </button>
                        </div>

                    </div>

                </div>
            </section>
        <!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->   
            <!--ORADORES-->
            <section id="losoradores">
                <div class="encabezado">
                    <p>CONOCE A LOS</p> <h2>ORADORES</h2>
                </div>

                <!--Tarjetas de Oradores-->
                <div class="container-fluid tarjetas">

                    <div class="row row-cols-1 row-cols-md-3 g-4">

                        <div class="col"> <!--Steve Jobs-->
                            <div class="card" style="width: 19rem;">
                                <img src="./img/steve.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="badge text-bg-warning">JavaScript</span>
                                    <span class="badge text-bg-info text-light">React</span>  
                                    <h5 class="card-title">Steve Jobs</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et voluptatibus perferendis deleniti, totam fuga sequi iste! Facilis explicabo repellat ut similique incidunt? Ullam nobis beatae, corporis facilis veniam magni ratione!</p>
                                </div>
                            </div>
                        </div>


                        <div class="col"> <!--Bill Gates-->
                            <div class="card" style="width: 19rem;">
                                <img src="./img/bill.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="badge text-bg-warning">JavaScript</span>
                                    <span class="badge text-bg-info text-light">React</span>     
                                    <h5 class="card-title">Bill Gates</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et voluptatibus perferendis deleniti, totam fuga sequi iste! Facilis explicabo repellat ut similique incidunt? Ullam nobis beatae, corporis facilis veniam magni ratione!</p>
                                </div>
                            </div>
                        </div>


                        <div class="col"><!--Ada Lovelace-->
                            <div class="card" style="width: 19rem;">
                                <img src="./img/ada.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="badge text-bg-secondary">Negocios</span>
                                    <span class="badge text-bg-danger">Startups</span>
                                    <h5 class="card-title">Ada Lovelace</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et voluptatibus perferendis deleniti, totam fuga sequi iste! Facilis explicabo repellat ut similique incidunt? Ullam nobis beatae, corporis facilis veniam magni ratione!</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </section>
        <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->        
            <!-- Lugar y Fecha-->
            
            <section class="lugar" id="lufe">
                <div class="card my-4" style="width: 100%;">
                    <div class="row g-0">
                    <div class="col-md-6">
                        <img src="./img/honolulu.jpg" class="img-fluid rounded-start" alt="...">
                    </div>

                    <div class="col-md-6">
                        <div class="card-body cardlugar h-100">
                        <h5 class="card-title">Bs As - Octubre</h5>
                            <p class="card-text">
                                Buenos Aires es la provincia y localidad mas grande del estaso de Argentina, en los Estados Unidos. 
                                Honolulu es la mas sureña de entre las principales ciudades estadounidenses.Aunque el nombre de Honolulu
                                se refiere al área urbana en la costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han formado 
                                una ciudad-condado consolidada que cubre toda la ciudad (aproximadamente 600 km2 de superficie).
                            </p>
                        <button type="button" class="btn btn-outline-light">Conocé más</button>
                        </div>
                    </div>

                    </div>
                </div>
            </section>
        <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>    
            <!--Formulario-->

            <section class="formulario" id="forms">

                <div class="encabezado">
                    <p>CONVIERTETE EN UN </p> <h2>ORADOR</h2>
                    <p>
                        Anótate como orador para dar una <u> charla ignite</u>.Cuéntanos de qué quieres hablar.
                    </p>
                </div>

                <div class="container-fluid formcont mb-3">
                
                    <form action="insertar.php"  method="post" class="w-50">
                        <div class="row mb-1">

                            <div class="col">
                            <input type="text" class="form-control" name="nombre" id="campNom" placeholder="Nombre" aria-label="Nombre">
                            </div>

                            <div class="col" >
                            <input type="text" class="form-control" name="apellido" id="campApe" placeholder="Apellido" aria-label="Apellido">
                            </div>
                        </div>

                        <div class="col-12  mb-3" >
                                <label for="inputEmail" class="form-label"></label>
                                <input type="email" name="mail" class="form-control" id="Emailform" placeholder="Email">
                        </div>

                        <div>
                            <p>Ingrese palabras Claves</p>
                        </div>

                        <div class="col-12 mt-2 mb-3">
                            <input type="text" name="tema" class="form-control" id="campNom" placeholder="Tema" aria-label="Tema ">
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">¿Sobre qué queres hablar ?</label>
                        </div>
                        <div>
                            <p>Recuerda incluir un título para tu charla.</p>
                        </div>
                    
                    <!--Botón--> 
                        <button type="submit" class="btn btn-success w-100" id="enviar">Enviar</button>

                        <div class="">
                            <p id="mensajeNombre"></p>
                            <p id="mensajeApellido"></p>
                        
                        </div>

                    </form>

                </div>

            </section>

            <section>

                    <div class="encabezado"> 
                        <h2>Listado de Inscriptos</h2>
                    </div>
            

                    <table class ="table table-striped">
                        <thead>
                            <!--<th>id</th> -->
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Mail</th>
                            <th>Tema</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>
                            <?php
                                while($fila = mysqli_fetch_array($query)){          
                            ?>
                            <tr>
                            <!-- <td><?php echo $fila["id"] ?>   </td>  -->
                                <td><?php echo $fila["Nombre"] ?>   </td>
                                <td><?php echo $fila["Apellido"] ?>   </td>
                                <td><?php echo $fila["Mail"] ?>   </td>
                                <td><?php echo $fila["Tema"] ?>   </td>
                                <td><a href="formmodif.php?id=<?php echo $fila["id"]?>"><button>Modificar</button></a></td>
                                <td><a href="eliminar.php?id=<?php echo $fila["id"]?>"><button>Eliminar</button></a></td>
                            </tr> 
                            <?php   } 
                            ?>
                    
                        </tbody>
                    </table>
                    
            </section>

        </main>
        <footer>
            <div class="container-fluid pie">
                <a href="" >Preguntas frecuentes</a>
                <a href="">Contáctanos</a>
                <a href="">Prensa</a>
                <a href="">Conferencias</a>
                <a href="">Términos y condiciones</a>
                <a href="">Privacidad</a>
                <a href="">Estudiantes</a>
            </div>
        </footer>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
        <script src="Indscripts.js"></script>
        
    </body>
</html>