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
                        <th></th>
                    </tr>
                </thead>                
            
                <tbody style="background-color:rgba(0,0,0,.6);">
                    <?php 
                        include_once 'init.php';
                        $conn = db_connect();
                        $consulta = $conn->query("SELECT * FROM moto");
                    

                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            echo "
                                <tr>
                                    <td class='text-center'><h1 class='display-4' style='font-size: 23px;'><a href='mostrarInforMoto.php?id={$linha['id']}'style='text-decoration:none;'>{$linha['id']}</a></td>
                                    <td class='text-center'><h1 class='display-4' style='font-size: 23px;'>{$linha['modfab']}</td>
                                    <td class='text-center'><h1 class='display-4' style='font-size: 23px;'>{$linha['resp']}</td>
                                    
                                    <td>
                                    <a href='form-edit-moto.php?id={$linha['id']}'><button type='button' class='btn text-white btn-sm text-center' style='background-color: #27408B;'>EDITAR</button></a>
                                    <a href='deleteMoto.php?id={$linha['id']}'><button type='button' class='btn btn-sm btn-danger text-center'>EXCLUIR</button></a>
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