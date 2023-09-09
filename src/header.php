<div class="row" id ="main-header">
    <div class="col">
        <div class="row">
            <div class="col-2">
                <i class="fa-solid fa-bars" id="toggle-menu"></i>
            </div>
            <div class="col" id="search-col">
                <form id="search" >  
                    <input type="input" name="searchText" id="search-input"/>
                    <button type="submit" id="search-submit">
                        <i class="fa fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>Olá <span id="user-name-screen"></span>!</h3>
                <p> <?php echo $title; ?></p>
                <div id="menu-wrapper">
                    <div id="menu">
                        <ul>
                            <li><a href="perfil.php"> Perfil</a></li>
                            <li><a href="search-by-beer.php"> Procurar combinações para Cerveja</a></li>
                            <li><a href="search-by-food.php"> Procurar combinações para Comida</a></li>
                            <li><a href="javascript:void(0)" id="btnLogout"> Logout</a></li>
                        </ul>
                    </div>                    
                </div>
            </div>                 
        </div>
    </div>
</div>