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
                <div class="col-12">
                    <form class="mt-" action="ejercicio3.php" method="POST">
                        <h2 class="text-center mt-4" >Promoción Spring step</h2>
                        <div class="row">
                            <div class="col-4">
                                <h4> Ingrese el precio del par de zapatos </h4>
                                <input type="number" class="form-control" placeholder="Pecio calzado" name="precio">
                            </div>
                            <div class="col-4">
                                <h4> Ingrese la cantidad de zapatos comprados</h4>
                                <input type="number" class="form-control" placeholder="Cantidad comprada" name="cantidad">
                            </div>
                                                     
                        </div>
                        <div><button type="submit" class="btn btn-secondary btn-sm mt-3" name="botonCalcular">Calcular</button>
                        </div>
                        
                        <?php if (isset($_POST["botonCalcular"])):
                                 $precio=$_POST["precio"];
                                 $cantidad=$_POST["cantidad"];
                                 $subtotal=$precio*$cantidad;
                                 $descuento=0;
                                 $total=0;
                                
                                
                                if ($cantidad<3) {
                                    echo("El valor de su compra es $".$subtotal.". No aplica descuento");
                                     }
                                 
                                else if ($cantidad==3) {
                                    $descuento=$subtotal*0.10;
                                    $total=$subtotal-$descuento;
                                    echo("El valor de compra con el 10% de descuento es: $".$total);
                                    echo("<br>");
                                    echo("\nEl descuento es de: $".$descuento);
                                    echo("<br>");
                                    echo ("\nEl descuento por par de zapatos es: $".$descuento/3);

                                     }

                                else if ($cantidad>3 && $cantidad<=8) {
                                        $descuento=$subtotal*0.20;
                                        $total=$subtotal-$descuento;
                                        echo("El valor de compra con el 20% de descuento es: ".$total);
                                        echo("<br>");
                                        echo("\nEl descuento es de: $".$descuento);
                                        echo("<br>");
                                        echo ("\nEl descuento por par de zapatos es: $".$descuento/$cantidad);
                                         }

                                else {
                                    $descuento=$subtotal*0.50;
                                    $total=$subtotal-$descuento;
                                    echo("El valor de compra con el 50% de descuento es: ".$total);
                                    echo("<br>");
                                    echo("\nEl descuento es de: $".$descuento);
                                    echo("<br>");
                                    echo ("\nEl descuento por par de zapatos es: $".$descuento/$cantidad);

                                     }         
                                 
                                 ?>
                        
                                 
                                                                 
                                         

                                              


                                        </div>
                                   </form>
                                <?php endif?>
                                 


                              

                    </form>

                                  


                    

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