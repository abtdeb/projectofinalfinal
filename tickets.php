<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Css-->
    <link rel="stylesheet" href="estilos.css">

    <!-- CSS only  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,400;1,300&display=swap" rel="stylesheet">

    
    
    <title>Compra de Tickets</title>
</head>
<body>
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
                        <a class="nav-link active text-secondary" aria-current="page" href="#losoradores">La conferencia </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-secondary" aria-current="page" href="index.php">El lugar y la fecha</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-secondary" aria-current="page" href="index.php">Conviertete en un orador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-success" href="#formsComp">Comprar Tickets</a>
                    </li>
                                        
                    </ul>
                
                </div>
            </div>
        </nav>
    </header>
    

    <main>

        <!-- Tarjetas-->

        <section>
            
            <div class="container-fluid tarjetas mt-3 g-4 ">

                <div class="row row-cols-lg-3 row-cols-md-4 g-2 px-2">
                    <!--80 off -->
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                       
                        <div class="card-body text-dark">
                          <h5 class="card-title text-dark"> <b>Estudiante</b></h5>
                          <p class="card-text"> Tine descuento</p>
                          <h6> <strong> 80% </strong>   </h6>
                          <p class="small-font text-secondary my-1">* presentar documentación</p>
                        </div>
                    </div>
                 <!---------------------------------------------------------------------------------------------------------------------->
                    <!--50 off-->    

                    <div class="card border-info mb-3" style="max-width: 18rem;">
                              
                        <div class="card-body text-dark">
                            <h5 class="card-title text-dark"> <b>Trainee</b> </h5>
                            <p class="card-text"> Tine descuento</p>
                            <h6> <strong> 50% </strong>   </h6>
                            <p class="small-font text-secondary my-1">* presentar documentación</p>
                        </div>
                    </div>

                 <!------------------------------------------------------------------------------------------------------------------------------------------------------>                    
                   <!--15 off-->         

                    <div class="card border-warning mb-3" style="max-width: 18rem;">
                        <div class="card-body text-dark">
                            <h5 class="card-title text-dark"><b>Junior</b> </h5>
                            <p class="card-text"> Tine descuento</p>
                            <h6> <strong> 15% </strong>   </h6>
                            <p class="small-font text-secondary my-1">* presentar documentación</p>
                        </div> 
                        
                    </div>
                    
                    
                </div>

            </div>
        </section>


      <!-- FORMULARIO -->  
        <section class="formulario" id="formsComp">

            <div class="encabezado mt-5">
                <p>VENTA</p> <h2>VALOR DE TICKET $200</h2>
               
            </div>

            <div class="container-fluid formcont mb-3">
               
                <form action="" class="w-50">
                    <div class="row mb-2">

                        <div class="col-6 mt-4">
                          <input type="text" class="form-control" id="Nombreform" placeholder="Nombre" aria-label="Nombre">
                        </div>

                        <div class="col-6 mt-4" >
                          <input type="text" class="form-control" id="Apellidoform" placeholder="Apellido" aria-label="Apellido">
                        </div>
                    

                        <div class="col-12 mt-2" >
                            <label for="inputEmail" class="form-label"></label>
                            <input type="email" class="form-control" id="Emailform" placeholder="Email">
                        </div>

                        <div class="col-6 mt-4" >
                            <label for="inputCantticket" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="Cantticket" placeholder="Cantidad" >
                        </div>


                        <div class="col-6 mt-4">
                             <label for="inputCateg" class="form-label">Categoria </label>

                            <select id="inputCateg" class="form-select">
                                <option selected value="0">-- Seleccione--</option>
                                <option value="1">Sin Categoria </option>
                                <option value="2">Estudiante</option>
                                <option value="3">Trainee</option>
                                <option value="4">Junior</option> 
                            </select>

                        </div>

                            <div class="col-12 mt-5">
                                <div class="alert alert-primary" role="alert" >
                                   <p id="totalp"> Total a Pagar: $ </p> 
                                </div>
                            </div>
                            

                        <!--Botón--> 
                        <div class="col-6 mt-4">
                              <button type="reset"  class="btn btn-success w-100" id="borrar">Borrar</button>
                        </div>

                        <div class="col-6 mt-4">
                            <button type="button" class="btn btn-success w-100" id="resum">Resumen </button>
                        </div>

                       
                        
                    
                    </div>    
                    
                </form>

            </div>

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
 <script src="scripts.js"></script>
</body>
</html>