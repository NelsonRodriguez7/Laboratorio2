<?php
    $f= $_GET["f"];
    $m = $_GET["m"];
    $total = $f + $m;
    $tf = ($f/$total)*100;
    $tm = ($m/$total)*100;
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 9</title>
</head>
<body>
    <div class="container-sm">
        <br></br>
        <h1>Programa 9<h1>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Genero</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Porcentaje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Femenino</th>
                        <td><?php echo $f ?></td>
                        <td><?php echo $tf ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Masculino</th>
                        <td><?php echo $m ?></td>
                        <td><?php echo $tm ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>