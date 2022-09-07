<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $division = $num1 / $num2;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 2</title>
</head>
<body>
    <div class="container-sm">
        <br></br>
        <h1>Programa 2<h1> 
        <div class="row">
            <div class="col">
             <div class="card border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Operacion 1</div>
            <div class="card-body text-primary">
                <h5 class="card-title">Suma</h5>
                <h6 class="card-text">La suma es: <?php echo $suma ?></h6>
            </div>
            </div>
        </div>
       <div class="col">
        <div class="card border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Operacion 2</div>
            <div class="card-body text-primary">
                <h5 class="card-title">Resta</h5>
                <h6 class="card-text">La resta es: <?php echo $resta ?></h6>
            </div>
            </div>
       </div>
        <div class="col">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Operacion 3</div>
            <div class="card-body text-primary">
                <h5 class="card-title">Multiplicacion</h5>
                <h6 class="card-text">La Multiplicacion es: <?php echo $multiplicacion ?></h6>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Operacion 4</div>
            <div class="card-body text-primary">
                <h5 class="card-title">Division</h5>
                <h6 class="card-text">La division es: <?php echo $division ?></h6>
            </div>
            </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>