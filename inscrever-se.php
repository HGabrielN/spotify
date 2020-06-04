<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Inscrever-se</title>
    <link rel="icon" href="imagens/favicon.png">

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
   
    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <style>
        section{
            font-weight: inherit;
        }
        label{
            margin-top: 30px;
        }
        form button.btn{
           margin-top: 50px;
            border-radius: 150px;
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
    </style>
</head>
<body>
     
    <header class="text-center">
        <img width="250" src="imagens/logoblack.png">
    </header>

    <section>
        <div class="text-center">
            <h5>Inscreva-se com seu endereço de e-mail</h5>
        </div>

        <div  id="inscrever" class="mt-4" style="width: 35%; margin:0px auto">
            <form class="form-data"  action="db.php" method="post">

              <label for="email">Qual seu e-mail?</label><br>
              <input placeholder="Insira o e-mail"class="form-control" type="email" name="email" id="">

              <label for="confirmarEmail">Confirme seu e-mail</label><br>
              <input  placeholder="Insira o e-mail novamente" class="form-control" type="email" name="confirmarEmail" id="">

              <label for="senha">Crie uma senha</label><br>
              <input  placeholder="Insira uma senha" class="form-control" type="password" name="senha" id="">

              <label for="nick">Como devemos chamar você?</label><br>
              <input placeholder="Insira um nome de perfil" class="form-control" type="text" name="nick" id="">
              
              <div class="mt-4">
                <input type="radio" name="concordo" id="">
                <span for="concordo">Eu concordo com os Termos e Condições e com a Política de Privacidade do Spotify.</span>
              </div>

              <div class="d-flex">
                 <button  class="form-control btn btn-success" type="submit">Inscreva-se </button>
              </div>
            </form>
        </div>
        
    </section>
    
</body>
</html>