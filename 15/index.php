<?php
    $tipo = $_GET["tipo"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 15</title>
</head>
<body>
    <div class="container-sm">
        <br></br>
        <h1>Programa 15<h1>
        <div class="row">
            <?php
                if($tipo==1)
                echo <<<END
                <div class="card border-primary mb-3" style="max-width: 40rem;">
                <div class="card-header">Aumento de credito - Tipo 1</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Recibes un aumento de</h5>
                    <h6 class="card-text">25%</h6>
                </div>
                </div>  
                END;
                elseif($tipo==2)
                echo <<<END
                <div class="card border-primary mb-3" style="max-width: 40rem;">
                <div class="card-header">Aumento de credito - Tipo 2</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Recibes un aumento de</h5>
                    <h6 class="card-text">35%</h6>
                </div>
                </div>  
                END;
                elseif($tipo==3)
                echo <<<END
                <div class="card border-primary mb-3" style="max-width: 40rem;">
                <div class="card-header">Aumento de credito - Tipo 3</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Recibes un aumento de</h5>
                    <h6 class="card-text">40%</h6>
                </div>
                </div>  
                END;
                elseif($tipo>=4)
                echo <<<END
                <div class="card border-primary mb-3" style="max-width: 40rem;">
                <div class="card-header">Aumento de credito - Tipo $tipo</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Recibes un aumento de</h5>
                    <h6 class="card-text">50%</h6>
                </div>
                </div>  
                END;

            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>