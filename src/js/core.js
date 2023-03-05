$(document).ready(function(){
    $("#entrar").click(function(event){
        event.preventDefault();
        console.log(event);
        pageIsLoading();
        login(event.currentTarget.form[0].value, event.currentTarget.form[1].value);
    });

    $("#btnLogout").click(function(event){
        event.preventDefault();
        console.log("Clicou logout")
        logout();
        
    })

    if ( !localStorage.getItem('loggedIn') && window.location.href.indexOf("login.php") < 1 ) {
        window.location.href = "login.php"
    } 

    
    if ($("#user-name-screen").length > 0 && localStorage.getItem('username')) {
        $("#user-name-screen").text(localStorage.getItem("username"));
    }


    if (window.location.href.indexOf("search-by-beer") > -1){
        buscaCervejas();
    }

    if (window.location.href.indexOf("beer-detail") > -1){
        pageIsLoading();
        urlParam = new URLSearchParams(window.location.search);
        getCervejaDetail(urlParam.get("id"));
    }


    if (window.location.href.indexOf("search-by-food") > -1){
        buscaComidas();
    }

    if (window.location.href.indexOf("food-detail") > -1){
        $(".loading-wrapper").removeClass("hidden");
        urlParam = new URLSearchParams(window.location.search);
        getComidaDetail(urlParam.get("id"));
    }
})

function login(user, pass){
    if (validaLogin(user, pass)) {
        console.log("vamos tentar logar");
        $.ajax({
            method: "POST",
            url: "../API/login.php",
            data: {
                user: user, 
                pass: pass
            }
        }).done(function(retorno) {
            resolveLogin(retorno)
        });
    };
}


function logout() {
    $.ajax({
        method: "POST",
        url: "../API/logout.php"      
    }).done(function(retorno) {
        localStorage.removeItem('loggedIn');
        window.location.href = "login.php"
    });
}

function validaLogin(user, pass){
    $valido = false;
    if (user == "" || pass == "") {
        loginInvalido();
    } else {
        $("#erroLogin").addClass("hidden");
        $valido = true;
    }
    return $valido;
}

function resolveLogin(login) {
    if (!login.nome) {
        loginInvalido();        
        return;
    }

    localStorage.setItem('loggedIn', true);
    localStorage.setItem('username', login.nome)
    window.location.href = "search-by-beer.php";
    

}

function loginInvalido() {
    $("#erroLogin").removeClass("hidden");
    pageIsLoaded();
}


function buscaCervejas() {
    $.ajax({
        method: "POST",
        url: "../API/cervejas.php"
    }).done(function(retorno) {
        getGrid(retorno, "beer");
    });
}


function buscaComidas() {
    $.ajax({
        method: "POST",
        url: "../API/comidas.php"
    }).done(function(retorno) {
        getGrid(retorno, "food");
    });
}


function getCervejaDetail(id) {
    console.log(id);
    $.ajax({
        method: "POST",
        url: "../API/cerveja-detail.php",
        data: {
            id: id
        }
    }).done(function(retorno){
        replaceCervejaDetail(retorno);
    });
}


function getComidaDetail(id) {
    console.log(id);
    $.ajax({
        method: "POST",
        url: "../API/comida-detail.php",
        data: {
            id: id
        }
    }).done(function(retorno){
        replaceComidaDetail(retorno);
    });
}


function replaceCervejaDetail(cerveja) {
    console.log(cerveja.cerveja.nome);
    cerveja=cerveja.cerveja;
    $("#item-nome").text(cerveja.nome);
    $("#item-descricao p").text(cerveja.descricao);
    $("#item-img img").attr("src", cerveja.foto);
    lista = "";
    cerveja.comida.forEach((element) => {
        lista += "<li>"
        lista += element
        lista += "</li>"
    })
    $("#item-harmonizacao ul").html(lista);
    pageIsLoaded();
}


function replaceComidaDetail(comida) {
    console.log(comida.comida.nome);
    comida=comida.comida;
    $("#item-nome").text(comida.nome);
    $("#item-descricao p").text(comida.descricao);
    $("#item-img img").attr("src", comida.foto);
    lista = "";
    comida.cerveja.forEach((element) => {
        lista += "<li>"
        lista += element
        lista += "</li>"
    })
    $("#item-harmonizacao ul").html(lista);
    $(".loading-wrapper").addClass("hidden");
}


function getSquare(row, tipo){
    html = "<a class='ctaGrid' href=";
    html += tipo;
    html += "-detail.php?id=";
    html += row.id;
    html += ">"
    html += " <div class='grid-item'>";
    html +=         "<div class='grid-img'>";
    html +=             "<img src='img/cervejas/";
    html +=                 typeof(row.image) != 'undefined' ? row.image : "exemplo.jpeg";
    html +=              "'/>"
    html +=         "</div>";
    html +=         "<div class='grid-item-name'>";
    html +=               row.nome;
    html +=         "</div>";
    html += "</div> ";
    html += "</a>";

    console.log(typeof(row.image))
    return html;
}


function getGrid(elementos, tipo){
    html = "";
    elementos.forEach((element) => {
        html += getSquare(element, tipo);
    });
    renderGrid(html);
}

function renderGrid(grid) {
    $("#grid-selection").html(grid);
}

function pageIsLoading() {
    $(".loading-wrapper").removeClass("hidden");
}

function pageIsLoaded() {
    $(".loading-wrapper").addClass("hidden");
    $(".skeleton-box").removeClass("skeleton-box");

}