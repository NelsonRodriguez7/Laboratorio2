<?php
    $p1 = $_GET["p1"];
    $p2 = $_GET["p2"];
    $p3 = $_GET["p3"];
    $fn = $_GET["fn"];
    $tf = $_GET["tf"];
    $pr1 = ($p1+$p2+$p3);
    $t = $pr1/3;
    $t1 = $t*0.55;
    $pr2 = $fn*0.30;
    $pr3 = $tf*0.15;
    $total = $t1+$pr2+$pr3;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 6</title>
</head>
<body>
    <div class="container-sm">
        <br></br>
        <h1>Programa 6<h1>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Asignaciones</th>
                        <th scope="col">Ponderacion</th>
                        <th scope="col">Total Obtenido</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Parciales</th>
                        <td>55%</td>
                        <td><?php echo $t1 ?>%</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Trabajo Final</th>
                        <td>15%</td>
                        <td><?php echo $pr3 ?>%</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Examen Final</th>
                        <td>30%</td>
                        <td><?php echo $pr2 ?>%</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Total</th>
                        <td>100%</td>
                        <td><?php echo $total ?>%</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>