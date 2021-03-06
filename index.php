<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Matemáticas</title>
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
                            <a class="nav-link" href=ejercicio2.php>Ejercicio2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=ejercicio3.php>Ejercicio3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=ejercicio4.php>Ejercicio4</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=ejercicio5.php>Ejercicio5</a>
                        </li>
                    </ul>
                    
                </div>
        </nav>

    </header>
    
    <main>
       
        <div class="container border=45">
            <div class="row justify-content-center">
                <div class="col-6">
                    <form class="mt-8" action="index.php" method="POST">
                        <h2 class="text-center mt-4" >Operaciones matemáticas</h2>
                        <div class="row">
                            <div class="col-4 mt-4">
                                <input type="number" class="form-control" placeholder="Numero 1" name="num1">
                            </div>
                            <div class="col-4 mt-4">
                                <input type="number text-center" class="form-control" placeholder="Numero 2" name="num2">
                            </div>
                            <div class="col-4 mt-4">
                            <select  name="operacion">
                              <option value= 1>suma</option >
                              <option value= 2>Resta </option >
                              <option value= 3>Multiplicación</option >
                              <option value= 4>División</option >
                              
                            </select>
                            </div>
                            
                        </div>
                        <div class="row">
                           <div class="col-12 text-center">
                             <button type="submit" class="btn btn-primary mt-5" name="botonEnvio">Calcular</button>
                            </div> 
                        </div>
                    </form>

                    
                    <?php if (isset($_POST["botonEnvio"])):
                     $numero1=$_POST["num1"];
                     $numero2=$_POST["num2"];
                     $operacion=$_POST["operacion"];
                    
                    ?> 

                     <h4 class="mt-3 text-center">  
                      <?php 
                      switch ($operacion)
                        {
                            case 1:
                                echo("La suma de: ".$numero1. " y ".$numero2." es: ".($numero1+$numero2));
                            break;

                            case 2:
                                echo("La Resta de: ".$numero1. " y ".$numero2." es: ".($numero1-$numero2));
                            break;

                            case 3:
                                echo("La multiplicación de: ".$numero1. " y ".$numero2." es: ".($numero1*$numero2));
                            break;

                            case 4:
                                echo("La división de: ".$numero1. " y ".$numero2." es: ".($numero1/$numero2));
                            break;



                        }
                          
                            endif
                        ?> 
                        
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