$(function(){
    $("#id-entrar").click(function (event) {
        event.preventDefault();
    
        email = $("#username").val();
        senha = $("#password").val();
    
        $.ajax({
            url: '../php/lib/autenticar-login-funcionario.php',
            type: 'POST',
            data: {
                'save': 1,
                'email': email,
                'senha': senha,
            },
            success: function (response) {
                if (response == "sucesso") {
                    $("#login").submit();
                } else if (response == "Usuario ou senha incorreto") {
                    alert("Usuario ou senha incorreto");
                } else {
                    alert("Error");
                }
            }
        });
    });

    $("#id-voltar").click(function(){
        window.location.replace("../index.php");
    })
});
