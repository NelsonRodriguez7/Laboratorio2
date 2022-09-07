<?php
    $nombre = $_GET["nombre"];
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    $n4 = $_GET["n4"];
    $n5 = $_GET["n5"];
    $promedio = ($n1+$n2+$n3+$n4+$n5)/5;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 5</title>
</head>
<body>
    <div class="container-sm">
        <br></br>
        <h1>Programa 5<h1> 
        <div class="row">
            <div class="col">
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Promedio</div>
                    <div class="card-body text-primary">
                        <h5 class="card-title">Estudiante: <?php echo $nombre ?></h5>
                        <h6 class="card-text">Tienes un promedio de: <?php echo $promedio ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>