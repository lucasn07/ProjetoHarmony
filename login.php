<html>
  <head>
    <meta charset="utf-8" />
    <title>Login Harmony Palace</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="visuais.css">
  </head>
      
  <body class="bd-body">

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
          
      <img src="logo.png.jfif" width="120" height="120" class="d-inline-block align-top" alt="">
        
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div  class="card-header">
              Harmony Palace - Acesso
            </div>
            <div class="card-body">
              <form action="user-login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                
                <!--isset() "FUNÇÃO NATIVA DO PHP PARA VERIFICAR SE UM INDICE DE UM ARRAY ESTÁ SETADO"
                <?/* if(isset($_GET['login']) == true && $_GET['login'] == 'erro') {?>
                  <div class="text-danger" style="text-align:center ; margin-bottom: 5px"> 
                  Usuário ou senha inválido(s)
                  </div>
                <? } */?>
                LÓGICA ENCAPSULADA DENTRO DE BLOCOS HTML COM PHP " /\ -->
                
                <button class="btn btn-lg btn-info ml-3" type="submit">Entrar</button>
                <a href="cadastro.php" class="btn btn-lg btn-info">Solicitar Acesso</button></a>
                
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>  
  

  

                
                
                 
                 
                 
                    
                 
                  
                