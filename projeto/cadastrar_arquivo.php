<?php
include '../classes/Diretorio.php';

$diretorio = new Diretorio();

if(count($_POST) == 0 and count($_FILES) == 0){
	header('location: index.php');
	exit;
}


$nome = $_POST["nome"];
$arquivo = $_FILES["arquivo"];


if (isset($_FILES["arquivo"])) {

	$nome_arquivo = $_FILES["arquivo"];
	if($diretorio->cadastrarArquivo($arquivo)){
		header ('location: index.php?mensagem=sucesso');
	}else{
		header ('location: index.php?mensagem=erro');
	}

}

?>