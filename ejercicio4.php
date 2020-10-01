<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supermercado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Ejercicio4 </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
        </nav>

    </header>
    
    <main>
       
        <div class="container border=45">
            <div class="row justify-content-center">
                <div class="col-12">
                    <form class="mt-12" action="ejercicio4.php" method="POST">
                        <h2 class="text-center mt-4" >Calcular sueldo semanal trabajador de Postobon</h2>
                        <div class="row">
                            
                            <div class="col-6 mt-5">
                                <h3> Ingrese la cantidad de horas trabajadas en la semana: </h3>
                                <input type="number" class="form-control" placeholder="Horas" name="horas">
                            </div>
                                                     
                        </div>
                        <div><button type="submit" class="btn btn-secondary btn-sm mt-3" name="botonCalcular">Calcular</button>
                        </div>
                        
                    </form>

                    
                    <?php if (isset($_POST["botonCalcular"])):
                         $Cantidad_horas=$_POST["horas"];
                         define('sueldo_base',800000);
                        
                         
                    ?> 

                      <h4 class="mt-5">  
                       <?php 
                          if ($Cantidad_horas<=40)
                        
                           {
                            
                            echo("El total de su sueldo esta semana es: ".($Cantidad_horas*20000));
                           }

                          
                           else 
                            {
                               $horas_extra=($Cantidad_horas-40);
                           
                               $Precio_horasExtra= $horas_extra*25000;
                          
                            
                                $sueldo=sueldo_base+$Precio_horasExtra;

                                  echo("El total de sueldo esta semana es: ".$sueldo);
                            }

                        ?> 

                    <?php endif ?>
                        
                    </h4> 


                    

                </div>
            </div>
        </div>

    </main>
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>