<?php
 
// inclui o arquivo de inicialização
require 'init.php';
session_start();

// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
 
if (empty($email) || empty($password))
{
    $_SESSION['email_senha'] = true;
    header("Location: form-login.php");
    exit;
}


$PDO = db_connect();
 
$sql = "SELECT id, name, email FROM users WHERE email = :email AND password = :password";
$stmt = $PDO->prepare($sql);
 
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
 
$stmt->execute();
 
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
if (count($users) <= 0)
{
    $_SESSION['error'] = true;
    header("Location: form-login.php");
    exit;
}
 
// pega o primeiro usuário
$user = $users[0];
 

$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['name'];
$_SESSION['user_email'] = $user['email'];

header('Location: paginaLogado.php');