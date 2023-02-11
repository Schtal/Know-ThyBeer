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
    };
}

function validaLogin(user, pass){
    $valido = false;
    if (user == "" || pass == "") {
        console.log("um deles e vazio");
        $("#erroLogin").removeClass("hidden");
    } else {
        console.log("segue o jogo");
        $("#erroLogin").addClass("hidden");
        $valido = true;
    }
    return $valido;
}

