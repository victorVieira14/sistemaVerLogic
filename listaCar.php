<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.min.css">
    </head>
    <body>
       <?php
            include_once 'header.php';
       ?>

    <div class="container-fluid">
        <div class="row center text-center">
            <table class="table text-white" style="background-color: #27408B;">

                <thead class="col-sm-12 md-12 lg-12">
                    <tr>
                        <th class="text-center">Codigo</th>
                        <th class="text-center">Modelo/fabricante</th>
                        <th class="text-center">Responsável</th>
                        <th class="text-center">Data de inspeção</th>
                        <th></th>
                    </tr>
                </thead>                
            
                <tbody style="background-color:rgba(0,0,0,.6);">
                    <?php 
                        include_once 'init.php';
                        $conn = db_connect();
                        $consulta = $conn->query("SELECT * FROM carro");
                    
                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            echo "
                                <tr>
                                    <td class='text-center'>{$linha['id']}</td>
                                    <td class='text-center'>{$linha['modfab']}</td>
                                    <td class='text-center'>{$linha['resp']}</td>
                                    <td class='text-center'>{$linha['dataInsp']}</td>

                                    <td>
                                    <a href='form-edit-car.php?id={$linha['id']}'><button type='button' class='btn btn-sm btn-primary text-center'>EDITAR</button></a>
                                    <a href='delete.php?id={$linha['id']}'><button type='button' class='btn btn-sm btn-danger text-center'>EXCLUIR</button></a>
                            </td>
                                </tr>
                            ";
                        }
                        ?>
                </tbody>

            </table>
        </div>
    </div>

    <?php

        include_once 'footer.php';

    ?>
    </body>
</html>