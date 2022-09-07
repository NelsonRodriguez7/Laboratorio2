<?php
    $p1 = $_GET["p1"];
    $p2 = $_GET["p2"];
    $p3 = $_GET["p3"];
    $suma = $p1+$p2+$p3;
    $por1 = ($p1/$suma)*100;
    $por2 = ($p2/$suma)*100;
    $por3 = ($p3/$suma)*100;
    $porcentaje = $por1+$por2+$por3;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 8</title>
</head>
<body>
    <div class="container-sm">
        <br></br>
        <h1>Programa 8<h1>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Inversionista</th>
                        <th scope="col">Cantidad Invertida</th>
                        <th scope="col">Porcentaje</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Persona 1</th>
                        <td>$<?php echo $p1 ?></td>
                        <td><?php echo $por1 ?>%</td>
                    </tr>
                    <tr>
                        <th scope="row">Persona 2</th>
                        <td>$<?php echo $p2 ?></td>
                        <td><?php echo $por2 ?>%</td>
                    </tr>
                    <tr>
                        <th scope="row">Persona 3</th>
                        <td>$<?php echo $p3 ?></td>
                        <td><?php echo $por3 ?>%</td>
                    </tr>
                    <tr>
                        <th scope="row">Total</th>
                        <td>$<?php echo $suma ?></td>
                        <td><?php echo $porcentaje ?>%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>