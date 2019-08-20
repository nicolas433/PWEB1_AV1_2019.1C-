<?php   
    require_once("../validacoes/validar.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = valida($_POST["email"]);
        emailSizeCheck($email);
        $nome = valida($_POST["nome"]);
        nameSizeCheck($nome);
        $telefone = valida($_POST["telefone"]);
        telSizeCheck($telefone);

        $msgtype = valida($_POST["msgtype"]);
        msgOpSizeCheck($msgtype);

        $mensagem = valida($_POST["mensagem"]);
        msgSizeCheck($mensagem);

        exibirMensagem();
    }
