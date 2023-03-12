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
        <script src="https://kit.fontawesome.com/0ea7e24e69.js" crossorigin="anonymous"></script>
        <script src="js/core.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="container-fluid background-yellow" id="main-content">
            <div class="h-100 content-wrapper">
                <div class="row" id ="main-header">
                    <div class="col">
                        <i class="fa-solid fa-bars" id="toggle-menu"></i>
                        <h3>Olá <span id="user-name-screen"></span>!</h3>
                        <p> Escolha o tipo de cerveja abaixo para receber opções de harmonização</p>
                        <div id="menu-wrapper">
                            <div id="menu">
                                <ul>
                                    <li><a href="search-by-beer.php"> Procurar combinações para Cerveja</a></li>
                                    <li><a href="search-by-food.php"> Procurar combinações para Comida</a></li>
                                    <li><a href="javascript:void(0)" id="btnLogout"> Logout</a></li>
                                </ul>
                            </div>                    
                        </div>
                    </div>
                </div>

                <div class="row" id="content-body">
                    <div class="col">
                        <div class="row">
                            <div class="col"><h3> Escolha o tipo de cerveja</h3></div>
                        </div>
                        
                        <div class="row">
                            <div class="col" id="grid-selection">
                                <div class="grid-item">
                                    <div class="grid-img-box skeleton-box"></div>
                                    <div class="grid-item-name skeleton-box"></div>
                                    
                                </div>
                                
                                <div class="grid-item">
                                    <div class="grid-img-box skeleton-box"></div>
                                    <div class="grid-item-name skeleton-box"></div>
                                    
                                </div>
                                
                                <div class="grid-item">
                                    <div class="grid-img-box skeleton-box"></div>
                                    <div class="grid-item-name skeleton-box"></div>
                                    
                                </div>                                

                                <div class="grid-item">
                                    <div class="grid-img-box skeleton-box"></div>
                                    <div class="grid-item-name skeleton-box"></div>
                                    
                                </div>
                                
                                
                                <div class="grid-item">
                                    <div class="grid-img-box skeleton-box"></div>
                                    <div class="grid-item-name skeleton-box"></div>
                                    
                                </div>
                                
                                

                                <div class="grid-item">
                                    <div class="grid-img-box skeleton-box"></div>
                                    <div class="grid-item-name skeleton-box"></div>
                                    
                                </div>
                                
                                
                                <div class="grid-item">
                                    <div class="grid-img-box skeleton-box"></div>
                                    <div class="grid-item-name skeleton-box"></div>
                                    
                                </div>
                                
                                <div class="grid-item">
                                    <div class="grid-img-box skeleton-box"></div>
                                    <div class="grid-item-name skeleton-box"></div>
                                    
                                </div>


                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <div id="main-box-cta">
                                    <a id="btn-main-cta" href="http://localhost/Know-ThyBeer/src/search-by-food.php" class="btn btn1">Escolher pelo tipo de comida</a>                                
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
    </body>
</html>