$(document).ready(function() {
    $('#form').submit(function (e) {  // click no button certo
        e.preventDefault();

        var login = $('#login').val();
        var senha = $('#senha').val();

        if(login =='' || senha ==''){
            $('input[type="text"],input[type="password"]').css("border","2px solid red");
            $('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
            alert("Campos Vazio");
        } else {
            console.log('here');
            $.post("login.php",{ login: login, senha:senha, btn_entrar: true }, //mandar o campo do btn POST
                function(data) {
                console.log(data);
                    if(data =='"logado"'){
                        window.location.href="home.php"
                        $('#form')[0].reset();
                        $('input[type="text"],input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
                    } else if(data == '"senha incorreta"') {
                        $('input[type="text"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
                        $('input[type="password"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
                        alert(data);
                    } else if(data ==  '"usuario incorreto"') {
                        $('input[type="text"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
                        $('input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
                        alert(data);
                    } else if(data == '"usuario e senha icorretos"') {
                        $('input[type="password"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
                        $('input[type="text"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
                        alert(data)
                    }
            });
        }
    });
});
$(document).ready(function () {
    $('#logout').click(function () {
        window.location.href = "logout.php"
    });
});

