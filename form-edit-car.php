    
<?php 
	include_once 'init.php';

	$id = isset($_GET['id']) ? $_GET['id'] : null;
	 
	// busca os dados du usuário a ser editado
	$PDO = db_connect();
	$sql = "SELECT * FROM carro WHERE id = :ID";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(':ID', $id, PDO::PARAM_INT);
	 
	$stmt->execute();
	 
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ver Logic</title>
    <link rel="icon" type="text/css" href="img/LOGOcompleto.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="materialize/css/materialize.min.css"/>
    <style type="text/css">
        .card{
            border-radius: 30px;
        }

        input[type="text"]{
            border-bottom: 3px solid red;
            
        }

        select:hover,
        select:focus,
        select:active,
        select:checked {
            color: black;
            border:none;
            border-bottom: 2px solid #27408B;
        }

        textarea{
            border:2px solid #27408B;
        }

        textarea:hover,
        textarea:focus,
        textarea:active,
        textarea:checked {
            color: black;
        }

                
        

    </style>
</head>
<body>

    <?php
        require 'header.php';
    ?>

    <div class="container">
        
        

        <div id="escrever" class="h1 text-center mt-5">CHECKLIST CAR   <img src="img/carro2.png" alt="carro" width="300" height="300"></div>


            <form method="post" class="form-group" action="editCar.php">
                
                <table class="table">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <input type="hidden" id="id" value="<?php echo $user['id'] ?>" style="border-bottom: 2px solid #27408B;" name="id" class="input-group-text">
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-sm-12 md-12 lg-12">
                            <label for="mod" style="font-size:1em; color:#27408B;"><strong> MOD/FAB do veículo</strong></label>
                            <input type="text" id="mod" value="<?php echo $user['modfab'] ?>" style="border-bottom: 2px solid #27408B;" name="modelo" class="form-control">
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="data" style="font-size:1em; color:#27408B;"><strong> Data de inspeção</strong></label>
                            <input type="date" id="data" style="border-bottom: 2px solid #27408B;" value="<?php echo $user['dataInsp'] ?>" name="inspecao" class="form-control">
                        </div>

                        

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="data" style="font-size:1em; color:#27408B;"><strong>Luzes dianteira</strong></label>
                            <div class="input-group mb-3">
                                <input type="text" id="mod" value="<?php echo $user['luzD'] ?>" style="border-bottom: 2px solid #27408B;" name="dianteira" class="form-control">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong>Luzes traseiras</strong></label>
                            <div class="input-group mb-3">
                                <input type="text" id="mod" value="<?php echo $user['luzT'] ?>" style="border-bottom: 2px solid #27408B;" name="traseira" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong>Luz de freio</strong></label>
                            <div class="input-group mb-3">
                                <input type="text" id="mod" value="<?php echo $user['luzF'] ?>" style="border-bottom: 2px solid #27408B;" name="freio" class="form-control">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong>Pisca Alerta</strong></label>
                            <div class="input-group mb-3">

                                <input type="text" id="mod" value="<?php echo $user['piscaA'] ?>" style="border-bottom: 2px solid #27408B;" name="alerta" class="form-control">
                            
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong>Pisca Pisca Dianteiro(Direito/Esquerdo)</strong></label>
                            <div class="input-group mb-3">
                            <input type="text" id="mod" value="<?php echo $user['piscaD'] ?>" style="border-bottom: 2px solid #27408B;" name="pisca" class="form-control">
                            
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong>Pisca Pisca Trazeiro(Direito/Esquerdo)</strong></label>
                            <div class="input-group mb-3">

                            <input type="text" id="mod" value="<?php echo $user['piscaT'] ?>" style="border-bottom: 2px solid #27408B;" name="piscaT" class="form-control">
                            
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong>Alarme de ré</strong></label>
                            <div class="input-group mb-3">

                                <input type="text" id="mod" value="<?php echo $user['alarmeR'] ?>" style="border-bottom: 2px solid #27408B;" name="re" class="form-control">
                            
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Extintor de segurança</strong></label>
                            <div class="input-group mb-3">

                                <input type="text" id="mod" name="extintor" value="<?php echo $user['extintor'] ?>" style="border-bottom: 2px solid #27408B;" class="form-control">
                            
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Espelhos retrovisores</strong></label>
                            <div class="input-group mb-3">
                                <input type="text" id="mod" name="espelho" value="<?php echo $user['retrovisor'] ?>" style="border-bottom: 2px solid #27408B;" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Portas</strong></label>

                            <input type="text" id="mod" name="portas" value="<?php echo $user['portas'] ?>" style="border-bottom: 2px solid #27408B;" class="form-control">


                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Cinto de segurança</strong></label>
                            <div class="input-group mb-3">
                                <input type="text" id="mod" name="cintoS" value="<?php echo $user['cinto'] ?>" style="border-bottom: 2px solid #27408B;" class="form-control">

                            </div>
                        </div>

                    </div>
                    
                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong>Óleo</strong></label>
                            <div class="input-group mb-3">
                                <input type="text" id="mod" name="oleo" value="<?php echo $user['oleo'] ?>" style="border-bottom: 2px solid #27408B;" class="form-control">

                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong>Gasolina</strong></label>
                            <div class="input-group mb-3">

                                <input type="text" id="mod" name="gasolina" value="<?php echo $user['gasolina'] ?>" style="border-bottom: 2px solid #27408B;" class="form-control">

                            </div>
                        </div>

                        </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Responsável pela verificação</strong></label>
                            <div class="input-group mb-3">
                                <input type="text" name="responsavel" value="<?php echo $user['resp'] ?>" style="border-bottom: 2px solid #27408B;">
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Técnico de segurança</strong></label>
                            <div class="input-group mb-3">
                                <input type="text" name="tecnico" value="<?php echo $user['tecnico'] ?>" style="border-bottom: 2px solid #27408B;">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-12 md-12 lg-12">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong>Operador/motorista</strong></label>
                            <div class="input-group mb-3">
                                <input type="text" name="operador" value="<?php echo $user['operador'] ?>" style="border-bottom: 2px solid #27408B;">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-12 md-12 lg-12">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> observações</strong></label>
                            <textarea value="<?php echo $user['obs'] ?>" name="obs" style="resize: none; height: 200px;">
                                
                            </textarea>                        
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-12 md-12 lg-12">
                            <button type="submit" class="btn btn-block text-white" style="background-color:#27408B;">SALVAR</button>                    
                        </div>

                    </div>

                </table>

            </form>
        </div>
    </div>  

    <?php
        include_once 'footer.php';
    ?>


</body>
</html>