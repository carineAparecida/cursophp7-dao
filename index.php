<?php

require_once("config.php");

//carrega um usuários
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);


//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("he");
//echo json_encode($search);

//carrga um usuário usando o login e a senha

//$usuario = new Usuario();
//$usuario->login("Helio", "123456789");
//echo $usuario;

//Criando um novo usuario
//$aluno = new Usuario("aluno", "123654789");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();
$usuario->loadById(5);
$usuario->update("professor", "@123");
echo $usuario;
?>