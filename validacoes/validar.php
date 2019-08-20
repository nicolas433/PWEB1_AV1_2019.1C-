<?php
    
    function valida($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
    
    function emailSizeCheck($input) {
        if(strlen($input)<25) {  
            echo "email contem menos que vinte e cinco caracteres.";
            die("error 404");
        }
    }
    function nameSizeCheck($input) {
        if(strlen($input)<10) {  
            echo "Nome contem menos que dez caracteres.";
            die("error 404");
        }
    }
    function telSizeCheck($input) {
        if(strlen($input)<11) {  
            echo "Informe o DD.";
            die("error 404");
        }
    }
    function msgOpSizeCheck($input) {
        if($input=="Escolha uma opção") {  
            echo "Informe uma mensagem.";
            die("error 404");
        }
    }
    function msgSizeCheck($input) {
        if(strlen($input)<50) {  
            echo "Mensagem precisa ter mais que 50 caracteres.";
            die("error 404");
        }
    }

    function exibirMensagem() {
        global $nome, $email, $telefone, $msgtype, $mensagem;
        echo "Seu nome: </br>";
        echo $nome;
        echo "<br>";
        echo "<br>";
        echo "Seu email: </br>";
        echo $email;
        echo "<br>";
        echo "<br>";
        echo "Seu telefone: </br>";
        echo $telefone;
        echo "<br>";
        echo "<br>";
        echo "Sua opção mensagem: </br>";
        echo $msgtype;
        echo "<br>";
        echo "<br>";
        echo "Sua mensagem: </br>";
        echo $mensagem;
        echo "<br>";
        echo "<br>";
    }
