<?php

require_once 'init.php';
 
// pega o ID da URL
$id = isset($_GET['id']) ? $_GET['id'] : null;
 
// valida o ID
if (empty($id))
{
    echo "ID não informado";
    exit;
}
 
// remove do banco
$PDO = db_connect();
$sql = "DELETE FROM caminhao WHERE id = :ID";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':ID', $id, PDO::PARAM_INT);
 
if ($stmt->execute())
{
    header('Location: listaCaminhao.php');
}
else
{
    echo "Erro ao remover";
    print_r($stmt->errorInfo());
}