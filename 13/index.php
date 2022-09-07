<?php
    $p = $_GET["p"];
    
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 13</title>
</head>
<body>
    <div class="container-sm">
        <br></br>
        <h1>Programa 13<h1>
        <div class="row">
        <?php
            if ($p < 199)
            echo <<<END
            <div class="card border-primary mb-3" style="max-width: 30rem;">
                <div class="card-header">Precio $95.00</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">No recibes descuento</h5>
                    <h6 class="card-text">La cantidad de personas es $p </h6>
                </div>
            </div>  
            END;
            elseif($p >=200 and $p<=300)
            echo <<<END
            <div class="card border-primary mb-3" style="max-width: 30rem;">
                <div class="card-header">Precio $85.00</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Recibes descuento</h5>
                    <h6 class="card-text">La cantidad de personas es $p </h6>
                </div>
            </div>  
            END;
            elseif($p >300)
            echo <<<END
            <div class="card border-primary mb-3" style="max-width: 30rem;">
                <div class="card-header">Precio $75.00</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Recibes descuento</h5>
                    <h6 class="card-text">La cantidad de personas es $p </h6>
                </div>
            </div>  
            END;
        ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>