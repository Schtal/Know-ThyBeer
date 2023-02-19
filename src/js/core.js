$(document).ready(function(){
    $("#entrar").click(function(event){
        event.preventDefault();
        console.log(event);
        $(".loading-wrapper").removeClass("hidden");
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

    console.log()

    if ($("#user-name-screen").length > 0 && localStorage.getItem('username')) {
        $("#user-name-screen").text(localStorage.getItem("username"));
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
    $(".loading-wrapper").addClass("hidden");
}