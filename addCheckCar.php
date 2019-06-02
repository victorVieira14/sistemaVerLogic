<?php 

    include_once 'init.php';

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

	$conn = db_connect();

	$sql = "INSERT INTO carro(modfab, dataInsp, luzD, luzT, luzF,piscaA, piscaD, piscaT, alarmeR, extintor, retrovisor, portas, cinto, oleo, gasolina, resp, tecnico, operador, obs) 
    VALUES
    (:MODELO, :INSP, :DIANT, :TRAZ, :FREIO, :ALERT, :PISCA, :PISCAT, :RE, :EXT, :ESP, :PORTA, :CINTO, :OLEO, :GAS, :RESP, :TEC, :OP, :OBS)";

    $stmt = $conn->prepare($sql);
    
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



    

	if ($stmt->execute()) {
		Header('Location: form-car.php');
	}else{
		echo "erro ao cadastrar";
		print_r($stmt->errorInfo());
	}

?>