<?php 
    $title = "Esta é a sua página de perfil";
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
                        <div class="row" id="section_cervejas">
                            <div class="col">
                                <h3>Cervejas Favoritas</h3>
                            </div>
                        </div>
                        <div class="favorite_section row" id="cervejas_favoritas">
                            <div class="col-md-6 col-xs-12 favorite_item">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="img/beer/exemplo.jpeg">
                                    </div>
                                    <div class="col">
                                        <h4> Beer Name</h4></br>
                                        <h5> IPA</h5>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        

                        <div class="row" id="section_comidas">
                            <div class="col">
                                <h3>Comidas Favoritas</h3>
                            </div>
                        </div>

                        <div class="favorite_section row" id="comidas_favoritas">
                            <div class="col-md-6 col-xs-12 favorite_item">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="img/beer/exemplo.jpeg">
                                    </div>
                                    <div class="col">
                                        <h4> Beer Name</h4></br>
                                        <h5> IPA</h5>
                                    </div>
                                </div>
                            </div>
                        </div>  



                    </div>
                </div>     
            </div>
        </div>
    </body>
</html>