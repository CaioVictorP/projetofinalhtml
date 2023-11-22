<?php
if(!isset($_SESSION))
{
    session_start();
}

if(!isset($_SESSION['nome']))
{
    die("Você não pode acessar esta página porque não está logado.<p>Clique <a href =\"login.php\">aqui</a> para logar</p>");
}


?>