<?php 

include "funcoes.php";

if(isset($_POST["cadastrar"])){
    $nome = $_POST["nome"];
    $tel1 = $_POST["tel1"];
    $tel2 = $_POST["tel2"];
    

    if(InserirUsuarios($nome, $tel1, $tel2) == true){
        sleep(1);
        header('Location: ../finalizacaocadastro.html');
    }else{
        header('Location: ../errocadastro.html');
    }
}

if(isset($_POST['atualizar'])){
    $nome = $_POST["nome"];
    $tel1 = $_POST["tel1"];
    $tel2 = $_POST["tel2"];
    $id = $_POST["idbanco"];
    $status = $_POST["status"];


    if(AtualizarUsuarios($id, $nome, $tel1, $tel2, $status)==true){
        sleep(1);
        header('Location: ../finalizacaoupdate.html');
    }
    
}
if(isset($_POST['deletar'])){
    $id = $_POST["idbanco"];

    if(DeletarUsuarios($id) == true){
        sleep(1);
        header('Location: ../finalizacaodeletar.html');
    }
}
?>