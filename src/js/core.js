// alternative to DOMContentLoaded
document.onreadystatechange = function () {
    if (document.readyState == "interactive") {
        const btnEntrar = document.getElementById('entrar');


        btnEntrar.onclick = basicValidation();

        function basicValidation() {
            alert('here we go');
        }
    
    }


   

}