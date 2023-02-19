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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="js/core.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="container-fluid background-yellow" id="main-content">
            <div class="h-100 content-wrapper">
                <div class="row" id ="main-header">
                    <div class="col text-center">
                        <h3>Acessar</h3>
                        <p> Informe usuario e senha</p>
                                           
                    </div>
                </div>

                <div class="row" id="content-body">
                    <div class="col">
                    <form action="#" method="#" class="basic-form">  
                        <div class="row">
                                
                                <div class="row">
                                    <input type="text" name="email" id="user" placeholder="Email de Usuário">
                                </div>

                                <div class="row">
                                    <input type="password" name="senha" id="senha"  placeholder="Digite sua senha">
                                    <p class="error hidden" id="erroLogin">"Usuário e/ou senha inválidos!"</p>
                                </div>
                                
                            </div>


                            <div class="row">
                                <div class="col">
                                    <div id="main-box-cta">
                                        <input tye="submit" class="btn btn1" id="entrar"  value="Acessar"/>                                                          
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