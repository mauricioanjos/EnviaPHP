
<?php
    header('Content-Type: text/html; charset=utf-8');
    //Meta Charset no Arquivo (UFT-8)
    
    //Cria vari‡vel com valores inseridos no POST
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    
    //Imprime o resultado
    $conteudo = "Ol‡ Sr. ".$nome." ".$sobrenome;
    echo $conteudo;
?>
