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
              <select class="form-control" id="exampleFormControlSelect1" placeholder="Selecciona otro ejercicio">
                     <option>Ejercicio 2 <a href="/ejercicio2.php"></a></option>
                     <option>Ejercicio 3</option>
                     <option>Ejercicio 6</option>
                     <option>Ejercicio 8</option>
                     <option>Ejercicio 20</option>
                   </select>

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
                <div class="col-4">
                    <form class="mt-8" action="index.php" method="POST">
                        <h2 class="text-center mt-4" >Operaciones matemáticas</h2>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Numero 1" name="num1">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Numero 2" name="num2">
                            </div>
                            <div class="col">
                            <select  name="operacion">
                              <option value= 1>suma</option >
                              <option value= 2>Resta </option >
                              <option value= 3>Multiplicación</option >
                              <option value= 4>División</option >
                              
                            </select>
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-primary mt-5" name="botonEnvio">Submit</button>
                    </form>

                    
                    <?php if (isset($_POST["botonEnvio"])):
                     $numero1=$_POST["num1"];
                     $numero2=$_POST["num2"];
                     $operacion=$_POST["operacion"];
                    
                    ?> 

                     <h4 class="mt-5">  
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