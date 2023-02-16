$(document).ready(function(){
    $("#entrar").click(function(event){
        event.preventDefault();
        console.log(event);
        login(event.currentTarget.form[0].value, event.currentTarget.form[1].value);
    });

    $("#btnLogout").click(function(event){
        event.preventDefault();
        console.log("Clicou logout")
        logout();
        
    })

    if ( !localStorage.getItem('loggedIn') && window.location.href.indexOf("index.php") < 1 ) {
        window.location.href = "index.php"
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
        window.location.href = "index.php"
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
    window.location.href = "search-by-beer.php";

}

function loginInvalido() {
    $("#erroLogin").removeClass("hidden");
}