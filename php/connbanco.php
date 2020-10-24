    <?php 
    function getConnection(){
        $conexao = mysqli_connect("localhost", "root", "", "cadastrosdb");
        
        return $conexao;
    }
    function closeConnection($conn){
        mysqli_close($conn);
    }
?>