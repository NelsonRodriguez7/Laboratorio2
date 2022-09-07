<?php
    $ht = $_GET["ht"];
    $pp = $_GET["pp"];
    $sb = $ht*$pp;
    $ds = 0.2 * $sb;
    $sn = $sb - $ds; 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 4</title>
</head>
<body>
    <div class="container-sm">
    <br></br>
        <div class="row">
            
            <h1>Programa 4</h1>
            <div class="col">
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Salario Neto</div>
                    <div class="card-body text-primary">
                        <h5 class="card-title">Calculo</h5>
                        <p class="card-text">Tu salario neto es de: <?php echo $sn ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>