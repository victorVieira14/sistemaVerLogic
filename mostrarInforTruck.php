    
<?php 
	include_once 'init.php';

	$id = isset($_GET['id']) ? $_GET['id'] : null;
	 
	// busca os dados du usuário a ser editado
	$PDO = db_connect();
	$sql = "SELECT * FROM caminhao WHERE id = :ID";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(':ID', $id, PDO::PARAM_INT);
	 
	$stmt->execute();
	 
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="text/css" href="img/LOGOcompleto.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Ver Logic</title>

    <style>
         html,
        body,
        header,
        .view {
        height: 50%;
        }

        @media (max-width: 740px) {
        html,
        body,
        header,
        .view {
            height: 500px;
        }
        }

        @media (min-width: 800px) and (max-width: 850px) {
        html,
        body,
        header,
        .view {
            height: 650px;
        }
        }
    </style>

  </head>
  <body>

    <!-- Imagem de fundo -->
    <div class="view" style="background-image: url(img/.jpg); background-repeat: no-repeat; background-size: cover;">


        <!-- Mascara e Configuração de posicionamento dos elementos-->
        <div class="d-flex justify-content-center align-items-center text-center">

            <div class="container p-5 mt-5">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <form method="POST">
                            <div class="card p-4">

                                <a href="listaCar.php" class="btn btn-light mr-auto" data-toggle="tooltip" data-placement="bottom" title="Voltar">
                                    <i class="fa fa-arrow-left"></i>
                                </a>

                                <div class="card-body bg-white">
                                    
                                    <h1 class="display-4 mb-5" style="font-size: 40px;">
                                        <i class="fa fa-user mr-2"></i> Informações
                                    </h1>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Modelo/Fabricante: 
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['modfab'] ?>" name="modelo">

                                            </h1>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Data de inpeção: 
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['dataInsp'] ?>" name="modelo">

                                            </h1>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Luz dianteira:
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['luzD'] ?>" name="modelo">

                                            </h1>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Luz Traseira:
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['luzT'] ?>" name="modelo">

                                            </h1>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Luz frontal: 
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['luzF'] ?>" name="modelo">

                                            </h1>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Pisca alerta: 
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['piscaA'] ?>" name="modelo">

                                            </h1>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Pisca dianteiro:
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['piscaD'] ?>" name="modelo">

                                            </h1>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Pisca Traseiro:
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['piscaT'] ?>" name="modelo">

                                            </h1>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Alarme de ré: 
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['alarmeR'] ?>" name="modelo">

                                            </h1>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Extintor: 
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['extintor'] ?>" name="modelo">

                                            </h1>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Espelhos retrovisores:
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['retrovisor'] ?>" name="modelo">

                                            </h1>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Cinto:
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['cinto'] ?>" name="modelo">

                                            </h1>
                                        </div>
                                    </div>
                                
                                <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Óleo: 
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['oleo'] ?>" name="modelo">

                                            </h1>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Gasolina: 
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['gasolina'] ?>" name="modelo">

                                            </h1>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Responsável:
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['resp'] ?>" name="modelo">

                                            </h1>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Técnico:
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['tecnico'] ?>">

                                            </h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Operador: 
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['operador'] ?>">

                                            </h1>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                                            <h1 class="display-4" style="font-size: 25px;">
                                                Observações: 
                                                <input class="text-center" style="border:none;" type="text" value="<?php echo $user['obs'] ?>">

                                            </h1>
                                        </div>
                                    </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>



    <!-- jQuery, Popper.js, Bootstrap JS -->
    
        <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js}"></script>

        <script type="text/javascript" src="js/popper.min.js}"></script>
        <script  type="text/javascript" src=js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/all.min.js"></script>
        <script type="text/javascript" src="js/jquery.mask.js"></script>

  </body>
</html>