<?php 
    $h = $_GET["h"];
    $m = $_GET["m"];
    $s = $_GET["s"];
    $s1 = $h*3600;
    $s2 = $m*60;
    $costo = ($s1+$s2+$s)*0.25;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 10</title>
</head>
<body>
    <div class="container-sm">
        <br></br>
        <h1>Programa 10<h1>
        <div class="row">
            <div class="col">
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Costo del proceso</div>
                    <div class="card-body text-primary">
                        <h5 class="card-title">Horas ingresadas: <?php echo $h ?> </h5>
                        <p class="card-text">Costo Total: $<?php echo $costo ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>