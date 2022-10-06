<html>
  <head>
    <meta charset="utf-8" />
    <title>Cadastro Harmony Palace</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
  </head>

  <body class="bg-body">

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
          
      <img src="logo.png.jfif" width="120" height="120" class="d-inline-block align-top" alt="">
        
      </a>
    </nav>

    <div class="container">    
    <form method="post" action="user-controller.php?acao=inserir" >
        <div class="form-group">
              <label for="email">Endereço de email</label>
              <input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Digite seu e-mail" required>
              <small  class="form-text text-muted">Será usado como login de acesso.</small>
              
              <label for="senha">Senha</label>
              <input name="senha" type="password" class="form-control" id="" placeholder="Digite sua senha" required>
              
              <label for="nome" >Nome Completo</label>
              <input name="nome" type="text" class="form-control" id="" placeholder="Digite o nome" required>
              
              <label for="telefone" >Telefone</label>
              <input name="telefone" type="number" class="form-control" id="" placeholder="Digite seu telefone" required>
              
              <label for="apartamento">Apartamento</label>
              <input name="apartamento" type="number" class="form-control" id="" placeholder="Número do apartamento">
        </div>    
             
              <button style="color: white" class="btn btn-lg btn-info" type="submit">Enviar Cadastro</button>
    </form>
    </div>    
  </body>
</html>    
     
  
            
             
                  
           
        
        
        
    

                
                
                 
                 
                 
                    
                 
                  
                