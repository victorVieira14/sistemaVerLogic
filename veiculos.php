<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <link rel="icon" type="text/css" href="img/LOGOcompleto.png">
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
                    <a href="listaCar.php" style="text-decoration: none;" ><button type="button" class="btn text-white btn-lg btn-block mb-3 h-100" style="background-color:#27408B;"><span class="text-center"><i class="fas fa-car" style="font-size:3em;"></i><h1 class="display-4" style="font-size:25px;">Listar Carros</h1></span></button></a>
                </tr>
                <tr>
                    <a href="listaCaminhao.php" style="text-decoration: none;" ><button type="button" class="btn text-white btn-lg btn-block mb-3 h-100" style="background-color:#27408B;"><span class="text-center"><i class="fas fa-truck" style="font-size:3em;"></i><h1 class="display-4" style="font-size:25px;">Listar caminhões</h1></span></button></a>                </tr>
                <tr>
                <a href="listaMoto.php" style="text-decoration: none;" ><button type="button" class="btn text-white btn-lg btn-block mb-3 h-100" style="background-color:#27408B;"><span class="text-center"><i class="fas fa-motorcycle" style="font-size:3em;"></i><h1 class="display-4" style="font-size:25px;">Listar motos</h1></span></button></a>                </tr>
            </table> 
            
        </form>


        <?php
            include_once 'footer.php';
        ?>
    </body>
</html>