<?php
    $presupuesto = $_GET["presupuesto"];
    $a1 = $presupuesto*0.40;
    $a2 = $presupuesto*0.30;
    $a3 = $presupuesto*0.30;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 7</title>
</head>
<body>
    <div class="container-sm">
        <br></br>
        <h1>Programa 7<h1>
        <h5>Presupuesto: $<?php echo $presupuesto ?></h5>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Area</th>
                        <th scope="col">Porcetaje</th>
                        <th scope="col">Cantidad que recibe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Ginecologia</th>
                        <td>40%</td>
                        <td>$<?php echo $a1 ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Traumatologia</th>
                        <td>30%</td>
                        <td>$<?php echo $a2 ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Pediatria</th>
                        <td>30%</td>
                        <td>$<?php echo $a3 ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>