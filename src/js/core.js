$(document).ready(function(){
    $("#entrar").click(function(event){
        event.preventDefault();
        pageIsLoading();
        login(event.currentTarget.form[0].value, event.currentTarget.form[1].value);
    });

    $("#cadastrar").click(function(event){
        event.preventDefault();
        pageIsLoading();
        cadastrar(event.target);
    });

   


    $("#btnLogout").click(function(event){
        event.preventDefault();
        console.log("Clicou logout")
        logout();
        
    })

    $("#search-submit").click(function(event){
        event.preventDefault();
        search($("#search-input")[0].value);
    })

    $("#search-result-close-button").on("click", function(){
        console.log("feeeecha!")
    })

    if ( !localStorage.getItem('loggedIn') && ( window.location.href.indexOf("login.php") < 1 && window.location.href.indexOf("cadastrar.php") < 1 )  ) {
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

    if (window.location.href.indexOf("perfil") > -1){
        getFavoritos();
    }

     $("#toggle-menu").click(function(){
        $("#menu-wrapper").toggleClass("open")
        $("#toggle-menu").toggleClass("open")
     })
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
    localStorage.setItem('userid', login.id)
    window.location.href = "search-by-beer.php";
}


function resolveCadastro(retorno) {
    console.log(retorno)
    pageIsLoaded();
}

function cadastrar(el) {
    if(!validaCadastro(el)) {
        cadastroInvalido();
        pageIsLoaded();
        return false;
    }

    realizaCadastro(el);
}

function realizaCadastro(el) {
    $.ajax({
        method: "POST",
        url: "../API/cadastro.php",
        data: {
            user: el.form[0].value, 
            name: el.form[1].value,
            pass: el.form[2].value
        }
    }).always(function(retorno,xhr) {
        pageIsLoaded();
        if (xhr == "error") {
            cadastroError()
        } else {
           cadastroWasSuccessful() 
        }

    });
    
}

function cadastroError() {
    $(".alreadyRegistered").removeClass("hidden");
}

function cadastroWasSuccessful() {
    alert("O cadastro foi realizado com sucesso. Obrigado por utilizar nosso sistema")
    window.location.href = "login.php"
}


function validaCadastro(el) { 
    $(".alreadyRegistered").addClass("hidden");
    valido = true;
    
    //valida vazios
    for(i = 0; i < 5; i++) {
        var x = el.form[i];
        $(x).find("~p").addClass("hidden"); 
        if (x.value == "") {            
            $(x).find("~p.req").removeClass("hidden");       
            valido = false;
            
        } else {
            //valida email
            if (x.name == "email" && !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(x.value)){
                console.log("É invalido")
                valido = false;
                $(x).find("~p.noEmail").removeClass("hidden");  
            } else if(x.name == "email") {
                $(x).find("~p.noEmail").addClass("hidden");  
            }

            //valida senha
            if (x.name == "senha" &&  ( !/(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)/.test(x.value) || x.value.length < 6) ) {
                valido = false;
                $(x).find("~p.notSecure").removeClass("hidden");
            }else if(x.name == "senha") {
                $(x).find("~p.notSecure").addClass("hidden");  
            }

            //valida repeticao
            if (x.name == "repSenha" && x.value != el.form[i-1].value) {
                valido = false;
                $(x).find("~p.notMatch").removeClass("hidden");  
            } else if(x.name == "repSenha") {
                $(x).find("~p.notMatch").addClass("hidden");  
            }


        }             
        
    }

   return valido;    
}

function cadastroInvalido() { 
    pageIsLoaded(); 
}


function loginInvalido() {
    $("#erroLogin").removeClass("hidden");
    pageIsLoaded();
}


function search(term) {
    $.ajax({
        method: "POST",
        url: "../API/search.php",
        data: {
            search: term
            
        }
    }).done(function(retorno) {
        renderizaSearch(retorno.result)
    });
}

function renderizaSearch(items) {
    console.log(items);
    html = "";
    html += "<div id='search-result-wrapper'>"
    html += "<div id='search-result'>";
    html += "<div id='search-result-close'><h4>Este é o rertorno que achamos para sua pesquisa </h4><span onclick='$(\"#search-result-wrapper\").remove()'><i class='fa-solid fa-circle-xmark' id='search-result-close-button'></i></span></div>";
    
    if(items.length > 0 ) {
        items.forEach((item) => {
            html += '<a  href="'+item.tipo+'-detail.php?id='+item.id+'"> <div class="col-md-6 col-xs-12 search-item">'
            html +=     '<div class="row">'
            html +=         '<div class="col-3">'
            html +=             '<img src="img/'+item.tipo+'/'+item.foto+'">'
            html +=         '</div>'
            html +=         '<div class="col">'
            html +=             '<h4>'+item.nome+'</h4>'
            html +=             '<span class="h5"> Veja mais detalhes</span>'
            html +=         '</div>'
            html +='    </div>'
            html +='</div></a>'
        })
    } else {
        html += '<div class="col-md-6 col-xs-12 search-item">'
        html +=     '<h5> Não há itens enctrontados </h5>'  
        html +='</div>'
    
    }
    html += "</div>"
    html += "<div id='search-result-overlay'></div>";
    html += "</div>"


    $("#main-content").before(html)
    
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
            id: id,
            usuario: getUser()
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
            id: id,
            usuario: getUser()
        }
    }).done(function(retorno){
        replaceComidaDetail(retorno);
    });
}


function replaceCervejaDetail(cerveja) {
    console.log(cerveja);
    cerveja=cerveja.cerveja;
    $("#item-nome").text(cerveja.nome);
    $("#item-descricao p").text(cerveja.descricao);
    $("#id").attr("value", cerveja.id);
    $("#item-img img").attr("src", "img/beer/"+cerveja.foto);
    lista = "";
    cerveja.comida.forEach((element) => {
        lista += "<li>"
        lista += element
        lista += "</li>"
    })

    if (cerveja.favorito != null) {
        $("#favorito").addClass("checked");
    }
    $("#item-harmonizacao ul").html(lista);
    pageIsLoaded();
}


function replaceComidaDetail(comida) {
    console.log(comida.comida);
    comida=comida.comida;
    $("#item-nome").text(comida.nome);
    $("#item-descricao p").text(comida.descricao);
    $("#item-img img").attr("src", "img/food/"+comida.foto);
    $("#id").attr("value", comida.id);
    lista = "";
    comida.cerveja.forEach((element) => {
        lista += "<li>"
        lista += element
        lista += "</li>"
    })

    if (comida.favorito != null) {
        $("#favorito").addClass("checked");
    }
    $("#item-harmonizacao ul").html(lista);
    pageIsLoaded();
}


function getSquare(row, tipo){
    html = "<a class='ctaGrid' href=";
    html += tipo;
    html += "-detail.php?id=";
    html += row.id;
    html += ">"
    html += " <div class='grid-item'>";
    html +=         "<div class='grid-img'>";
    html +=             "<img src='img/"+tipo+"/";
    html +=                 typeof(row.foto) != 'undefined' ? row.foto : "exemplo.jpeg";
    html +=              "'/>"
    html +=         "</div>";
    html +=         "<div class='grid-item-name'>";
    html +=               row.nome;
    html +=         "</div>";
    html += "</div> ";
    html += "</a>";

    console.log(row)
    return html;
}


function getGrid(elementos, tipo){
    html = "";
    console.log(elementos);
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


function getFavoritos() {
    getFavoritosCerveja(getUser());
    getFavoritosComida(getUser());
}

function getFavoritosCerveja(user) {
    $.ajax({
        method: "POST",
        url: "../API/getFavoritosCerveja.php",
        data: {
            usuario: user            
        }
    }).always(function(retorno,xhr) {
        gridFavoritar(retorno.items, 'beer')
    });
}

function getFavoritosComida(user) {
    $.ajax({
        method: "POST",
        url: "../API/getFavoritosComida.php",
        data: {
            usuario: user            
        }
    }).always(function(retorno,xhr) {
      gridFavoritar(retorno.items, 'food')
    });
}


function gridFavoritar(elementos, tipo) {
    html = "";
    console.log(elementos);
    elementos.forEach((element) => {
        html += renderFavoritoItems(element, tipo);
    });

    target = tipo == 'beer' ? "#cervejas_favoritas" : "#comidas_favoritas"
    if (!!elementos[0]) {
        $(target).html(html);
    } else {
        $(target).html(getNoFavoritedItems());
    }
    
 
    
}

function getNoFavoritedItems() {
    html="";
    html += '<div class="col-md-6 col-xs-12 favorite_item">'
    html +=     '<h5> Não há itens favoritados </h5>'  
    html +='</div>'




    return html   
}

function renderFavoritoItems(element, tipo) {
    html="";
    html += '<a class="h5" href="'+tipo+'-detail.php?id='+element.id+'"> <div class="col-md-6 col-xs-12 favorite_item">'
    html +=     '<div class="row">'
    html +=         '<div class="col-3">'
    html +=             '<img src="img/'+tipo+'/'+element.foto+'">'
    html +=         '</div>'
    html +=         '<div class="col">'
    html +=             '<h4>'+element.nome+'</h4>'
    html +=             '<span class="h5"> Veja mais detalhes</span>'
    html +=         '</div>'
    html +='    </div>'
    html +='</div></a>'




    return html
}



function getUser() {
    return localStorage.getItem("userid");
}


function toggleFavoritar($tipo) {
    var x = getUser();
    var y = $("#id").attr("value");
    $("#favorito").toggleClass("checked");
    $target = $tipo == 'cerveja' ? 'favoritarCerveja' : 'favoritarComida';
    $.ajax({
        method: "POST",
        url: "../API/"+$target+".php",
        data: {
            usuario: x, 
            item: y
            
        }
    }).always(function(retorno,xhr) {
      console.log("favoritado!")
      console.log(retorno)

    });

    
}