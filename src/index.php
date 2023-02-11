<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Currículo Ariel Dias</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
        <link href="css/estilo.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="js/core.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="container" id="main-content">
            <form action="#" method="#">
                <div class="row">
                    <label for="user"> User </label>
                    <input type="text" name="email" id="user">
                  
                </div>

                <div class="row">
                    <label for="senha"> Senha </label>
                    <input type="password" name="senha" id="senha">
                    <p class="error hidden" id="erroLogin">"Usuário e/ou senha inválidos!"</p>
                </div>

                <div class="row">
                    <input type="submit" value="entrar" id="entrar"/>
                </div>

            </form>            
        </div>
    </body>
</html>