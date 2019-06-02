<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ver Logic</title>
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


            <form method="post" class="form-group" action="">
                
                <table class="table">

                    <div class="row">

                        <div class="col-sm-12 md-12 lg-12">
                            <label for="mod" style="font-size:1em; color:#27408B;"><strong> MOD/FAB do veículo</strong></label>
                            <input type="text" id="mod" style="border-bottom: 2px solid #27408B;" name="modelo" class="form-control">
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="data" style="font-size:1em; color:#27408B;"><strong> Data de inspeção</strong></label>
                            <input type="date" id="data" style="border-bottom: 2px solid #27408B;" name="inspecao" class="form-control">
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="data" style="font-size:1em; color:#27408B;"><strong> Porta malas</strong></label>
                            <div class="input-group mb-3">
                                <select name="portaM" class="custom-select mt-2" id="inputGroupSelect01">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Freio de pé</strong></label>
                            <div class="input-group mb-3">
                                <select name="freioPe" class="custom-select" style="background-color:transparent;" id="inputGroupSelect02">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Motor de partida</strong></label>
                            <div class="input-group mb-3">

                                <select name="motor" class="custom-select" id="inputGroupSelect03">
                                    <option selected disabled="">Informe</option>
                                    <option value="2">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Limpador de para brisa</strong></label>
                            <div class="input-group mb-3">

                                <select name="limpador" class="custom-select" id="inputGroupSelect04">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Lavador de para brisa</strong></label>
                            <div class="input-group mb-3">

                                <select name="lavador" class="custom-select" id="inputGroupSelect05">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Buzina</strong></label>
                            <div class="input-group mb-3">

                                <select name="buzina" class="custom-select" id="inputGroupSelect06">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Faróis</strong></label>
                            <div class="input-group mb-3">

                                <select name="farol" class="custom-select" id="inputGroupSelect07">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Lanternas dianteiras(seta)</strong></label>
                            <div class="input-group mb-3">

                                <select name="lantDianteiras" class="custom-select" id="inputGroupSelect08">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Lanternas traseiras(seta)</strong></label>
                            <div class="input-group mb-3">

                                <select name="lantTraseiras" class="custom-select" id="inputGroupSelect09">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Luz de freio</strong></label>
                            <div class="input-group mb-3">

                                <select name="freio" class="custom-select" id="inputGroupSelect10">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Luz de ré</strong></label>
                            <div class="input-group mb-3">

                                <select name="re" class="custom-select" id="inputGroupSelect11">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Extintor de segurança</strong></label>
                            <div class="input-group mb-3">

                                <select name="extintor" class="custom-select" id="inputGroupSelect12">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Espelhos retrovisores</strong></label>
                            <div class="input-group mb-3">

                                <select name="espelho" class="custom-select" id="inputGroupSelect13">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Indicadores de painel</strong></label>
                            <div class="input-group mb-3">

                                <select name="painel" class="custom-select" id="inputGroupSelect14">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Condições dos pneus</strong></label>
                            <div class="input-group mb-3">

                                <select name="pneu" class="custom-select" id="inputGroupSelect15">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Pneu estepe</strong></label>
                            <div class="input-group mb-3">
 
                                <select name="estepe" class="custom-select" id="inputGroupSelect16">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Vidros</strong></label>
                            <div class="input-group mb-3">

                                <select name="vidro" class="custom-select" id="inputGroupSelect17">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Portas</strong></label>
                            <div class="input-group mb-3">

                                <select name="portas" class="custom-select" id="inputGroupSelect18">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Cinto de segurança</strong></label>
                            <div class="input-group mb-3">

                                <select name="cintoS" class="custom-select" id="inputGroupSelect19">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Macaco</strong></label>
                            <div class="input-group mb-3">

                                <select name="macaco" class="custom-select" id="inputGroupSelect20">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Chave de roda</strong></label>
                            <div class="input-group mb-3">

                                <select name="chave" class="custom-select" id="inputGroupSelect21">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Nível de óleo</strong></label>
                            <div class="input-group mb-3">

                                <select name="oleo" class="custom-select" id="inputGroupSelect22">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Chave de roda</strong></label>
                            <div class="input-group mb-3">

                                <select name="chave" class="custom-select" id="inputGroupSelect23">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Nível fluido de freio</strong></label>
                            <div class="input-group mb-3">

                                <select name="nFluido" class="custom-select" id="inputGroupSelect24">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Nível de água</strong></label>
                            <div class="input-group mb-3">

                                <select name="agua" class="custom-select" id="inputGroupSelect25">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Ruído interno</strong></label>
                            <div class="input-group mb-3">

                                <select name="ruido" class="custom-select" id="inputGroupSelect26">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Lataria</strong></label>
                            <div class="input-group mb-3">

                                <select name="lataria" class="custom-select" id="inputGroupSelect27">
                                    <option selected disabled="">Informe</option>
                                    <option value="1">OK</option>
                                    <option value="2">Não está em bom estado</option>
                                    <option value="3">Não informado</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Responsável pela verificação</strong></label>
                            <div class="input-group mb-3">
                                <input type="text" name="responsavel" style="border-bottom: 2px solid #27408B;">
                            </div>
                        </div>

                        <div class="col-sm-6 md-6 lg-6">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> Técnico de segurança</strong></label>
                            <div class="input-group mb-3">
                                <input type="text" name="tecnico" style="border-bottom: 2px solid #27408B;">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-12 md-12 lg-12">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong>Operador/motorista</strong></label>
                            <div class="input-group mb-3">
                                <input type="text" name="operador" style="border-bottom: 2px solid #27408B;">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-12 md-12 lg-12">
                            <label for="text" style="font-size:1em; color:#27408B;"><strong> observações</strong></label>
                            <textarea style="resize: none; height: 200px;">
                                
                            </textarea>                        
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-12 md-12 lg-12">
                            <button class="btn btn-block text-white" style="background-color:#27408B;">SALVAR</button>                    
                        </div>

                    </div>

                </table>

            </form>
        </div>
    </div>  




</body>
</html>