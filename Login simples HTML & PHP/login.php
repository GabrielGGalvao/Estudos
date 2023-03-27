<?php
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    if($user == "Gabriel" && $pass == "123")
    {
        echo <center>"Login efetuado com sucesso"</center>;
    }
    else
    {
        echo <center>"Login e/ou senha incorretos"</center>;
    }
?>