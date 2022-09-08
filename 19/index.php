<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 19</title>
</head>
<body>
    <div class="container-sm">
    <br></br>
        <h1>Programa 18</h1>
        <div class="row">
        <table class="table">
                    <thead>
                        <tr>
                            <th>Numero</th>
                            <th>Encriptado</th>
                            <th>Ver</th>
                            <th>Ver Modal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for($i=0;$i<=100;$i++){?>
                        
                        <tr>
                            <td scope="row"> <?php echo $i ?></td>
                            <?php $ci=md5($i) ?>
                            <td scope="row"><?php echo $ci . "\n";  ?></td>
                            <td><a href="ver.php?num= <?php echo $i ?>&ci=<?php echo $ci ?>"><button type="button" class="btn btn-primary">Ver</button></a></td>
                            <td><!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Modal <?php echo $i ?>
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog        ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Numero <?php echo $i ?> </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                           <?php echo "Cifrado: $ci" ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary">Validar</button>
                                        </div>
                                    </div>
                                </div>
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