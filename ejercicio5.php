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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href=index.php>Ejercicio1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=ejercicio2.php>Ejercicio2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=ejercicio3.php>Ejercicio3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=ejercicio4.php>Ejercicio4</a>
                        </li>
                    </ul>
                    
                </div>
        </nav>

    </header>
    
    <main>
       
        <div class="container border=45">
            <div class="row justify-content-center">
                <div class="col-12">
                    <form class="mt-12" action="ejercicio5.php" method="POST">
                        <h2 class="text-center mt-4" >Ingreso de información usuarios sucursal A</h2>
                        <table class="table table-striped">
                        <div class="row">
                            <div class="col-12 mt-5">
                                <h3> Ingrese la información de los 5 empleados: </h3>
                            </div> 
                            </div> 
                          <div class="row mt-4 ml-2">
                           <h4> Información Usuario 1: </h4>
                          </div> 

                         <div class="row">
                                                           
                            <div class="col-3 ">
                                
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre1">
                            </div>

                            <div class="col-3 ">
                                <input type="text" class="form-control" placeholder="Teléfono" name="telefono1">
                            </div>

                            
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Dirección" name="direccion1">
                            </div>

                            
                            <div class="col-3">
                                <input type="number" class="form-control" placeholder="Salario" name="salario1">
                            </div>
                        
                          
                        </div>  

                        <div class="row mt-4 ml-2">
                           <h4> Información Usuario 2: </h4>
                        </div> 

                        <div class="row">
                                                           
                            <div class="col-3 ">
                                
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre2">
                            </div>

                            <div class="col-3 ">
                                <input type="text" class="form-control" placeholder="Teléfono" name="telefono2">
                            </div>

                            
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Dirección" name="direccion2">
                            </div>

                            
                            <div class="col-3">
                                <input type="number" class="form-control" placeholder="Salario" name="salario2">
                            </div>
                        
                          
                        </div>  

                        <div class="row mt-4 ml-2">
                           <h4> Información Usuario 3: </h4>
                        </div> 

                        <div class="row">
                                                           
                            <div class="col-3 ">
                                
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre3">
                            </div>

                            <div class="col-3 ">
                                <input type="text" class="form-control" placeholder="Teléfono" name="telefono3">
                            </div>

                            
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Dirección" name="direccion3">
                            </div>

                            
                            <div class="col-3">
                                <input type="number" class="form-control" placeholder="Salario" name="salario3">
                            </div>
                        
                          
                        </div>  

                        <div class="row mt-4 ml-2">
                           <h4> Información Usuario 4 </h4>
                        </div> 

                        <div class="row">
                                                           
                            <div class="col-3 ">
                                
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre4">
                            </div>

                            <div class="col-3 ">
                                <input type="text" class="form-control" placeholder="Teléfono" name="telefono4">
                            </div>

                            
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Dirección" name="direccion4">
                            </div>

                            
                            <div class="col-3">
                                <input type="number" class="form-control" placeholder="Salario" name="salario4">
                            </div>
                        
                          
                        </div>  

                        <div class="row mt-4 ml-2">
                           <h4> Información Usuario 5: </h4>
                        </div> 

                        <div class="row">
                                                           
                            <div class="col-3 ">
                                
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre5">
                            </div>

                            <div class="col-3 ">
                                <input type="text" class="form-control" placeholder="Teléfono" name="telefono5">
                            </div>

                            
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Dirección" name="direccion5">
                            </div>

                            
                            <div class="col-3">
                                <input type="number" class="form-control" placeholder="Salario" name="salario5">
                            </div>
                        
                          
                        </div>  



                          <div class="col-3 mt-4">
                                <button type="submit" class="btn btn-secondary btn-sm mt-3" name="botonCalcular">Calcular</button>

                        
                            </div> 
                            </div> 
                        
                    </form>

                    
                    <?php if (isset($_POST["botonCalcular"])):
                    $sumatoriaSalarios=0;
                    define("sucursalB",40000000);
                    define("sucursalC",32000000);
                    
                    echo("Usuarios de sucursal A");
                    echo("<br>");
                    $usuario1=array($_POST["nombre1"],$_POST["telefono1"],$_POST["direccion1"],$_POST["salario1"]);
                    print_r($usuario1);
                    echo("<br>");

                    $usuario2=array($_POST["nombre2"],$_POST["telefono2"],$_POST["direccion2"],$_POST["salario2"]);
                    print_r($usuario2);
                    echo("<br>");

                    $usuario3=array($_POST["nombre3"],$_POST["telefono3"],$_POST["direccion3"],$_POST["salario3"]);
                    print_r($usuario3);
                    echo("<br>");


                    $usuario4=array($_POST["nombre4"],$_POST["telefono4"],$_POST["direccion4"],$_POST["salario4"]);
                    print_r($usuario4);
                    echo("<br>");

                    $usuario5=array($_POST["nombre5"],$_POST["telefono5"],$_POST["direccion5"],$_POST["salario5"]);
                    print_r($usuario5);
                    echo("<br>");

                                        
                     $Salarios= array ('sueldo1'=>$_POST["salario1"],'sueldo2'=>$_POST["salario2"],'sueldo3'=>$_POST["salario3"],
                                       'sueldo4'=>$_POST["salario4"],'sueldo5'=>$_POST["salario5"]);   
                     
                                            
                      foreach ($Salarios as $clave=>$valor )
                      {
                        $sumatoriaSalarios=$sumatoriaSalarios+$valor;

                      }

                      echo("La suma de todos los salarios de la sucursal A es: ".$sumatoriaSalarios);

                      echo("<br>");

                      if ($sumatoriaSalarios>sucursalB){
                          echo("La sucursal con mayor sumatoria de salarios es la sucursal A ");
                         }
                      else{
                        echo("La sucursal con mayor sumatoria de salarios es la sucursal B");

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