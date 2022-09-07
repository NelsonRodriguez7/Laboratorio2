<?php
    $cm = $_GET["cm"];
    $con = $cm/2.54;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 11</title>
</head>
<body>
    <div class="container-sm">
        <br></br>
        <h1>Programa 11<h1>
        <div class="row">
            <div class="card border-primary mb-3" style="max-width: 30rem;">
                <div class="card-header">Convertidor de CM a Pulgada</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Convertir: <?php echo $cm ?>CM</h5>
                    <h6 class="card-text">Son: <?php echo $con ?> Pulgadas</h6>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>