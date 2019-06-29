<?php
//inclui as funções de autoload
include('inc/funcoes.inc.php');

//recupera a url
$url = explode('&',$_SERVER['QUERY_STRING']);

$conteudo = 'home';

if((isset($url[0]) && is_file('internas/'.$url[0].'.php'))){
    $conteudo = $url[0];
}else{
    header('Location: ?home');
}

//carrega conteudo
include('inc/header.inc.php');
include("internas/$conteudo.php");
include('inc/footer.inc.php');
?>