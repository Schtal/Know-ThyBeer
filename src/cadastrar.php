<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Know Thy Beer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
        <link href="css/estilo.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="js/core.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="container-fluid background-yellow" id="main-content">
            <div class="h-100 content-wrapper">
                <div class="row" id ="main-header">
                    <div class="col text-center">
                        <h3>Cadastro</h3>
                        <p> Preencha os dados abaixo. Todos os campos são obrigatórios</p>
                                           
                    </div>
                </div>

                <div class="row" id="content-body">
                    <div class="col">
                    <form action="#" method="#" class="basic-form">  
                        <div class="row">
                                
                                <div class="row">
                                    <input type="text" name="email" id="user" req="1" placeholder="Email de Usuário">
                                    <p class="error hidden req"> O campo não pode ser vazio</p>
                                    <p class="error hidden noEmail">O valor informado não parece ser um e-mail</p>
                                </div>

                                <div class="row">
                                    <input type="text" name="nome" id="nome" req="1" placeholder="nome">
                                    <p class="error hidden req">O campo não pode ser vazio</p>
                                </div>

                                <div class="row">
                                    <input type="password" name="senha" id="senha" req="1" placeholder="Digite sua senha">
                                    <p class="error hidden req">O campo não pode ser vazio</p>
                                    <p class="error hidden notSecure"> A senha precisa ser pelo menos 6 caracteres e conter ao menos um dígito e uma letra</p>
                                </div>
                                

                                <div class="row">
                                    <input type="password" name="repSenha" id="repSenha" req="1"  placeholder="Repita sua senha">
                                    <p class="error hidden req">O campo não pode ser vazio</p>
                                    <p class="error hidden notMatch"> As senhas não são idênticas</p>
                                    

                                </div>

                                <div class="row">
                                    <p class="error hidden alreadyRegistered"> Este usuário já está cadastrado.</p> 
                                </div>
                            </div>


                            <div class="row">
                                <div class="col">
                                    <div id="main-box-cta">
                                        <input tye="submit" class="btn btn1" id="cadastrar"  value="Cadastrar"/>                                                          
                                    </div>
                                </div>
                            </div>

                        </form>       

                        <div class="row">
                            <div class="col text-center">
                                <div id="footer-spacing">
                                    <div id="bottom-elipse"></div>
                                </div>                    
                            </div>
                        </div>                                                   
                    </div>
                </div>     
            </div>
        </div>


       
        <div class="loading-wrapper hidden">
            <div class="d-flex justify-content-center loading">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </body>
</html>