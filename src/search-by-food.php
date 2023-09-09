<?php 
    $title = "Escolha entre as múltiplas opções de pratos para ver as harmonizações compatíveis";
 ?>

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/0ea7e24e69.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/core.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="container-fluid background-yellow" id="main-content">
            <div class="h-100 content-wrapper">
                <?php include "header.php" ?>
                <div class="row" id="content-body">
                    <div class="col">
                        <div class="row">
                            <div class="col"><h3> Escolha o tipo de comida</h3></div>
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
                                    <a id="btn-main-cta"  href="http://localhost/Know-ThyBeer/src/search-by-beer.php" class="btn btn1">Escolher pelo tipo de cerveja</a>                                
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