<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IMPERIUM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="materialize/css/materialize.css">
    <style>
        img:hover{
            transition: 0.5s;
            transform: scale(1.2);
        }

    </style>
</head>
<body>

    <?php
        include_once 'header.php';
    ?>

    <div style="display:hidden; width:200px; "></div>
    
    <main class="view cover-container-fluid d-flex w-100 h-100 p-3 mx-auto flex-column">
        
        <h1 class="display-4 text-center mb-5">Escolha um veículo para seu checklist</h1>


        <div class="row">
            <div class="col-sm-6 md-6 lg-6">
                <figure class="figure" style="display: flex; justify-content: center;">
                    <a href="form-car.php"><img src="img/carro2.png" alt="carro" width="300" height="300"></a>
                </figure>
            </div>


            <div class="col-sm-6 md-6 lg-6">
                <figure class="figure" style="display: flex; justify-content: center;">
                    <a href="form-motocyber.php"><img src="img/moto2.png" width="300" height="300" class="rounded mx-auto d-block" alt="...">
                </figure>
            </div>
        </div>
        <div class="row"> 
            <div class="col-sm-6 md-6 lg-6">
                <figure class="figure" style="display: flex; justify-content: center;">
                    <a href="form-truck.php"><img src="img/caminhao2.png" alt="caminhao" width="300" height="300"></a>
                </figure>
            </div>

            <div class="col-sm-6 md-6 lg-6">
                <figure class="figure" style="display: flex; justify-content: center;">
                    <a href="form-truck.php"><img src="img/aviao.png" alt="aviao" width="300" height="300"></a>
                </figure>
            </div>
        </div>
    </main>
    

    <?php
        include_once 'footer.php';
    ?>
        

</body>
</html>