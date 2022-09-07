<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $suma = $num1+$num2;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 1</title>
</head>
<body>
    <div class="container">
      <br></br>
      <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Programa 1</div>
        <div class="card-body text-primary">
          <h5 class="card-title">Suma de dos numeros</h5>
          <p class="card-text">La suma es: <?php echo $suma ?></p>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>