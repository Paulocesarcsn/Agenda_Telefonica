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
          <h3>Cadastro de usuários</h3>
          <h4>Realize abaixo o seu cadastro</h4>
          <fieldset>
            <input placeholder="Seu nome" type="text" tabindex="1" name="nome" required>
          </fieldset>
          <fieldset>
            <input placeholder="Seu telefone principal" type="tel" tabindex="3" name="tel1" required>
          </fieldset>
          <fieldset>
            <input placeholder="Seu telefone secundário" type="tel" tabindex="3" name="tel2" required>
          </fieldset>
          <fieldset>
            <button name="cadastrar" type="submit" id="form-cadastrar" data-submit="...Sending">Cadastrar</button>
          </fieldset>
          <fieldset>
            <button onclick="location.href='index.html'" name="retornar" type="button" data-submit="...Sending">Retornar ao menu</button>
          </fieldset>
          <p class="copyright">Desenvolvido por <a href="https://www.linkedin.com/in/paulo-cesar-002626196/" target="_blank" style="text-decoration: none;">@Paulo Cesar</a></p>
        </form>
      </div>
</body>
</html>