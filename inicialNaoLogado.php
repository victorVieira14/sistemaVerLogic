<?php

    include_once 'headerNaoLogado.php';

?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
      <link rel="icon" type="text/css" href="img/LOGOcompleto.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

<main role="main" class="container-fluid">

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><span><i style="color:#27408B;">Monte sua própria checklist</i></span></h2>
        <p class="lead text-center text-black"><b>Sua organização é muito importante no dia a dia, aqui você pode organizar-se de forma mais efetiva e menos trabalhosa</b></p>
      </div>
      <div class="col-md-5 center">
        <img src="img/checklist.jpg" class="img-fluid mx-auto" width="500" height="500" />
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"><span><i style="color:#27408B;">Cadastre veículos</i> </span></h2>
        <p class="lead text-center text-black"><b>Cadastrando seu veículo aqui, seus dados estarão seguros e longe de ameaças que destruam as suas informações.</b></p>
      </div>
      <div class="col-md-5 order-md-1 center">
          <img src="img/fusca.jpg" class="img-fluid mx-auto" width="500" height="500" />
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette center">
      <div class="col-md-7">
        <h2 class="featurette-heading "><span><i style="color:#27408B;">Cadastre-se na VerLogic</i></span></h2>
        <p class="lead text-center text-black"><b>Com o seu cadastro feito, você poderá ter acesso aos dados que nossa empresa oferece a você</b>  </p>
        <a style="text-decoration:none; color:white;" href="form-add.php"><button type="button" class="btn btn-block text-white mb-4" style="background-color:#27408B;">CADASTRE-SE</button></a>
      </div>
      <div class="col-md-5">
          <img src="img/feliz.jpg" class="img-fluid mx-auto" width="500" height="500" />
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

</main>

    <?php
        include_once 'footer.php';
    ?>

</body>
</html>