<?php 
    include 'php/funcoes.php';
    $idbanco = $_POST['id'];
    $Todososdados = BuscarDadosId($idbanco);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <title>Cadastro de usuários</title>
</head>
<body>
    <div class="container">  
        <form id="contact" action="php/backend.php" method="POST">
          <h3>Atualização de usuários</h3>
          <h4>Realize abaixo a sua alteração</h4>
          <fieldset>
            <input id="idbando" placeholder="ID Do Banco" type="text" tabindex="3" name="idbanco" value="<?php echo $Todososdados['id']?>" required readonly>
          </fieldset>
          <fieldset>
            <input id="nome" placeholder="Seu nome" value="<?php echo $Todososdados['nome']?>" type="text" tabindex="1" name="nome" required>
          </fieldset>
          <fieldset>
            <input id="tel1" placeholder="Seu telefone principal" value="<?php echo $Todososdados['telefone']?>" type="text" tabindex="3" name="tel1" required>
          </fieldset>
          <fieldset>
            <input id="tel2" placeholder="Seu telefone secundário" type="text" tabindex="3" name="tel2" value="<?php echo $Todososdados['telefone2']?>" required>
          </fieldset>
          <fieldset>
            <input id="status" placeholder="Status do usuário" type="text" tabindex="3" name="status" value="<?php echo $Todososdados['estado']?>" required>
          </fieldset>
          <fieldset>
            <button name="atualizar" type="submit" id="form-cadastrar" data-submit="...Sending">Atualizar</button>
          </fieldset>
          <fieldset>
            <button onclick="location.href='index.html'" type="button" data-submit="...Sending">Retornar ao menu</button>
          </fieldset>
          <fieldset>
            <button onclick="location.href='editar.php'" type="button" data-submit="...Sending">Retornar a tabela</button>
          </fieldset>
          <p class="copyright">Desenvolvido por <a href="https://www.linkedin.com/in/paulo-cesar-002626196/" target="_blank" style="text-decoration: none;">@Paulo Cesar</a></p>
        </form>
      </div>
</body>
</html>