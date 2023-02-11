$(document).ready(function(){
    $("#entrar").click(function(event){
        event.preventDefault();
        console.log(event);
        login(event.currentTarget.form[0].value, event.currentTarget.form[1].value);
    });
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
    console.log("resolve login");
    console.log(login);
    if (!login.nome) {
        loginInvalido();
        return;
    }

}

function loginInvalido() {
    $("#erroLogin").removeClass("hidden");
}