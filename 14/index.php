<?php
    $year = $_GET["year"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 14</title>
</head>
<body>
    <div class="container-sm">
        <br></br>
        <h1>Programa 14<h1>
        <div class="row">
            <?php
                if($year==1)
                echo <<<END
                <div class="card border-primary mb-3" style="max-width: 30rem;">
                <div class="card-header">Tienes 1 Año</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Recibes un bono</h5>
                    <h6 class="card-text">De $100 por tener $year año </h6>
                </div>
                </div>  
                END;
                elseif($year==2)
                echo <<<END
                <div class="card border-primary mb-3" style="max-width: 30rem;">
                <div class="card-header">Tienes 2 Año</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Recibes un bono</h5>
                    <h6 class="card-text">De $200 por tener $year años </h6>
                </div>
                </div>  
                END;
                elseif($year==3)
                echo <<<END
                <div class="card border-primary mb-3" style="max-width: 30rem;">
                <div class="card-header">Tienes 3 Año</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Recibes un bono</h5>
                    <h6 class="card-text">De $300 por tener $year años </h6>
                </div>
                </div>  
                END;
                elseif($year==4)
                echo <<<END
                <div class="card border-primary mb-3" style="max-width: 30rem;">
                <div class="card-header">Tienes 4 Año</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Recibes un bono</h5>
                    <h6 class="card-text">De $400 por tener $year años </h6>
                </div>
                </div>  
                END;
                elseif($year==5)
                echo <<<END
                <div class="card border-primary mb-3" style="max-width: 30rem;">
                <div class="card-header">Tienes 5 Año</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Recibes un bono</h5>
                    <h6 class="card-text">De $500 por tener $year años </h6>
                </div>
                </div>  
                END;
                elseif($year>5)
                echo <<<END
                <div class="card border-primary mb-3" style="max-width: 30rem;">
                <div class="card-header">Tienes $year Año</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Recibes un bono</h5>
                    <h6 class="card-text">De $1000 por tener $year años </h6>
                </div>
                </div>  
                END;
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>