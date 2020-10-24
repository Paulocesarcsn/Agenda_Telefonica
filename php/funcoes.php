<?php 
    include "connbanco.php";
    
    function InserirUsuarios($nome, $tel1, $tel2){
        $conn = getConnection();

        $querySql = "INSERT INTO usuarios (nome, telefone, telefone2) VALUES ('$nome', '$tel1', '$tel2')";
        
        if(mysqli_query($conn, $querySql)){
            return true;
        }else{
            return false;
        }
         
        closeConnection($conn);
    }
    function ListarTodosUsuarios(){
        $conn = getConnection();

        $querySql = "SELECT * FROM usuarios";
        $result = $conn->query($querySql);

        while($pessoa = $result->fetch_assoc()){
            echo "<tr><td> {$pessoa['nome']} </td> ";
            echo "<td> {$pessoa['telefone']} </td>";
            echo "<td> {$pessoa['telefone2']} </td>";
            echo "<td> {$pessoa['estado']} </td>";
            echo "<td> {$pessoa['id']} </td></tr>";
        }
        
        closeConnection($conn);

   }
   function AtualizarUsuarios($id, $nome, $tel1, $tel2, $status){
    $conn = getConnection();
    $querySql = "UPDATE usuarios SET nome = '$nome', telefone = '$tel1', telefone2 = '$tel2', estado = '$status' WHERE id = '$id'";

    if(mysqli_query($conn, $querySql)){
        return true;
    }else{
        return false ;
    }
}
    function DeletarUsuarios($id){
        $conn = getConnection();

        $querySql = "DELETE FROM usuarios WHERE id = '$id'";

        if(mysqli_query($conn, $querySql) == true){
            return true;
        }else{
            return false;
        }
        closeConnection($conn);
    }
    function BuscarDadosId($idbanco){
        $conn = getConnection();

        $querySql = "SELECT * FROM usuarios WHERE id = '$idbanco'";
        $result = $conn->query($querySql);

        $pessoa = $result->fetch_assoc();

        return $pessoa;


    }
    function ListarTodosPraEdita(){
        $conn = getConnection();

        $querySql = "SELECT * FROM usuarios";
        $result = $conn->query($querySql);

        while($pessoa = $result->fetch_assoc()){
            echo "<tr><td> {$pessoa['nome']} </td> ";
            echo "<td> {$pessoa['telefone']} </td>";
            echo "<td> {$pessoa['telefone2']} </td>";
            echo "<td> {$pessoa['estado']} </td>";
            echo "<td> {$pessoa['id']} </td>";
            echo "<td>
            <form action='updatefinal.php' method='POST'>
            <input type='hidden' name='id' value=".$pessoa['id'].">
            <button name='listar' id='form-cadastrar'>Editar</button>
            </form>
            </td></tr>";
        }
        
        closeConnection($conn);

        return $pessoa;
    }
    function DeletarPorID(){
        $conn = getConnection();

        $querySql = "SELECT * FROM usuarios";
        $result = $conn->query($querySql);

        while($pessoa = $result->fetch_assoc()){
            echo "<tr><td> {$pessoa['nome']} </td> ";
            echo "<td> {$pessoa['telefone']} </td>";
            echo "<td> {$pessoa['telefone2']} </td>";
            echo "<td> {$pessoa['estado']} </td>";
            echo "<td> {$pessoa['id']} </td>";
            echo "<td>
            <form action='apagar.php' method='POST'>
            <input type='hidden' name='id' value=".$pessoa['id'].">
            <button name='deletar' id='form-cadastrar'>Deletar</button>
            </form>
            </td></tr>";
        }
        
        closeConnection($conn);

        return $pessoa;
    }


?>