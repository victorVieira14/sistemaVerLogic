<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

        <?php
            include_once 'header.php';
        ?>

        <form method="post" class="container-fluid">   
            <table>
                <tr>
                    <a href="listaCar.php" style="text-decoration: none;" ><button type="button" class="btn text-white btn-lg btn-block mb-3 h-100" style="background-color:#27408B; font-family: Aeroshodic"><i class="display-5">Listar carros</i></button></a>
                </tr>
                <tr>
                    <a href="listaCaminhao.php" style="text-decoration: none;" ><button type="button" class="btn text-white btn-lg btn-block mb-3 h-100" style="background-color:#27408B; font-family:  Aeroshodic"><i class="display-5">Listar caminhões</i></button></a>
                </tr>
                <tr>
                    <a href="listaMoto.php" style="text-decoration: none;" ><button type="button" class="btn text-white btn-lg btn-block mb-3 h-100" style="background-color:#27408B; font-family: Aeroshodic"><i class="display-5">Listar motos</i></button></a>
                </tr>
            </table> 
            
        </form>


        <?php
            include_once 'footer.php';
        ?>
    </body>
</html>