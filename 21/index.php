<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 21</title>
</head>
<body>
    <div class="container-sm">
        <br></br>
        <h1>Programa 21</h1>
        <div class="row">
        <table class="table">
                    <thead>
                        <tr>
                            <th>Numero</th>
                            <th>Valor</th>
                            <th>Grafico Utilizando Progress Bar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for($i=0;$i<=10;$i++){
                            $aleatorio = rand(0,100);
                            $color=" ";
                            if ($aleatorio >= 91) 
                            $color= "info";
                            if($aleatorio< 61)
                            $color= "secundary";
                            elseif($aleatorio<= 70)
                            $color= "danger";
                            elseif($aleatorio<= 80)
                            $color= "warning";
                            elseif($aleatorio<= 90)
                            $color= "info";
                            else $color= "success";
                            ?>
                        
                        <tr>
                            <td scope="row"> <?php echo $i ?></td>
                            <td scope="row"><?php echo $aleatorio ?></td>
                            <td><div class="progress">
                                <div class="progress-bar bg-<?php echo $color ?> progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $aleatorio ?>%;" aria-valuenow="<?php echo $aleatorio ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $aleatorio ?></div>
                            </div></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>