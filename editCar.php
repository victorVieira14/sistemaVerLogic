<?php
 
    require 'init.php';

    $modelo = isset($_POST['modelo']) ? $_POST['modelo']: null;
    $insp = isset($_POST['inspecao']) ? $_POST['inspecao']: null;
    $diant = isset($_POST['dianteira']) ? $_POST['dianteira']: null;
    $traz = isset($_POST['traseira']) ? $_POST['traseira']: null;
    $freio = isset($_POST['freio']) ? $_POST['freio']: null;
    $alert = isset($_POST['alerta']) ? $_POST['alerta']: null;
    $pisca = isset($_POST['pisca']) ? $_POST['pisca']: null;
    $piscaT = isset($_POST['piscaT']) ? $_POST['piscaT']: null;
    $re = isset($_POST['re']) ? $_POST['re']: null;
    $extintor = isset($_POST['extintor']) ? $_POST['extintor']: null;
    $esp = isset($_POST['espelho']) ? $_POST['espelho']: null;
    $portas = isset($_POST['portas']) ? $_POST['portas']: null;
    $cinto = isset($_POST['cintoS']) ? $_POST['cintoS']: null;
    $oleo = isset($_POST['oleo']) ? $_POST['oleo']: null;
    $gas = isset($_POST['gasolina']) ? $_POST['gasolina']: null;
    $resp = isset($_POST['responsavel']) ? $_POST['responsavel']: null;
    $tec = isset($_POST['tecnico']) ? $_POST['tecnico']: null;
    $op = isset($_POST['operador']) ? $_POST['operador']: null;
    $obs = isset($_POST['obs']) ? $_POST['obs']: null;
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    
// atualiza o banco
$PDO = db_connect();
$sql = "UPDATE carro SET modfab = :MODELO, dataInsp = :INSP, luzD = :DIANT, luzT = :TRAZ, luzF = :FREIO,piscaA = :ALERT, piscaD = :PISCA, piscaT = :PISCAT, alarmeR = :RE, extintor = :EXT, retrovisor = :ESP, portas = :PORTA, cinto = :CINTO, oleo = :OLEO, gasolina = :GAS, resp = :RESP, tecnico = :TEC, operador = :OP, obs = :OBS WHERE id = :ID";

$stmt = $PDO->prepare($sql);
    
$stmt->bindParam(':MODELO', $modelo);
$stmt->bindParam(':INSP', $insp);


$stmt->bindParam(':DIANT', $diant);
$stmt->bindParam(':TRAZ', $traz);
$stmt->bindParam(':FREIO', $freio);
$stmt->bindParam(':ALERT', $alert);
$stmt->bindParam(':PISCA', $pisca);
$stmt->bindParam(':PISCAT', $piscaT);
$stmt->bindParam(':RE', $re);
$stmt->bindParam(':EXT', $extintor);
$stmt->bindParam(':ESP', $esp);
$stmt->bindParam(':PORTA', $portas);
$stmt->bindParam(':CINTO', $cinto);
$stmt->bindParam(':OLEO', $oleo);
$stmt->bindParam(':GAS', $gas);


$stmt->bindParam(':RESP', $resp);
$stmt->bindParam(':TEC', $tec);
$stmt->bindParam(':OP', $op);
$stmt->bindParam(':OBS', $obs);
$stmt->bindParam(':ID', $id, PDO::PARAM_INT);


if ($stmt->execute())
{
    header('Location: form-edit-car.php');
}
else
{
    echo "Erro ao alterar";
    print_r($stmt->errorInfo());
}