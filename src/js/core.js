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

    window.location.href = "search-by-beer.php";

}

function loginInvalido() {
    $("#erroLogin").removeClass("hidden");
}