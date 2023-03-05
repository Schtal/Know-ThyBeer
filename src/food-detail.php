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
                        <h3>Olá <span id="user-name-screen"></span>!</h3>
                        <p> Escolha o tipo de comida abaixo para receber opções de harmonização</p>
                        <div id="menu">
                            <a href="javascript:void(0)" id="btnLogout"> Logout</a>
                        </div>                    
                    </div>
                </div>

                <div class="row" id="content-body">
                    <div class="col">
                        <div class="row">
                            <div class="col"><h3 id='item-nome'> Frango</h3></div>
                        </div>
                        
                        <div class="row">
                            <div class="col" id="item-detail">
                                <div class="row">
                                    <div class="col-sm-12 col-md4 text-center" id="item-img">
                                        <img src=""/>
                                    </div>

                                    <div class="col-sm-12 col-md4" id="item-descricao">
                                        <h3> Descrição:</h3>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                            Etiam vel commodo nisi. Etiam id turpis a tortor accumsan dapibus eu vitae neque. 
                                            Curabitur laoreet facilisis nisi. Morbi vulputate egestas tortor. 
                                            Nulla vestibulum dui non pulvinar convallis. 
                                            Nam lacinia, velit sit amet condimentum sollicitudin, felis eros sodales felis, a tincidunt purus mauris non lorem. 
                                            Mauris sit amet volutpat nulla, at ullamcorper nisl. Quisque sapien diam, efficitur a tempus eu, interdum id diam. 
                                            Sed feugiat, libero non consectetur efficitur, eros mauris ullamcorper purus, vitae iaculis ligula tellus sed orci.
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12" id="item-harmonizacao">
                                        <h3> Harmonização</h3>
                                        <ul>
                                            <li>lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                                            <li>Etiam vel commodo nisi. Etiam id turpis a tortor accumsan dapibus eu vitae neque. </li>
                                            <li>Curabitur laoreet facilisis nisi. Morbi vulputate egestas tortor. </li>
                                            <li>Nulla vestibulum dui non pulvinar convallis. </li>
                                            <li>Nam lacinia, velit sit amet condimentum sollicitudin, felis eros sodales felis, a tincidunt purus mauris non lorem. </li>
                                            <li>Mauris sit amet volutpat nulla, at ullamcorper nisl. Quisque sapien diam, efficitur a tempus eu, interdum id diam. </li>
                                            <li>Sed feugiat, libero non consectetur efficitur, eros mauris ullamcorper purus, vitae iaculis ligula tellus sed orci.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <div id="main-box-cta">
                                    <a id="btn-main-cta" href="http://localhost/Know-ThyBeer/src/search-by-beer.php" class="btn btn1">Escolher pelo tipo de cerveja</a>                                
                                </div>
                            </div>
                        </div>    

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