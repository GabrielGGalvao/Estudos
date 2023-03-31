<?php
$user = $_POST["user"];
$pass = $_POST["pass"];
    if ($user == "Gabriel" && $pass == "123")
    {
    echo "<center><h1>Login efetuado com sucesso</h1></center>";
    }
   else
    {
    echo "<center><h1>Login e/ou senha incorretos</h1></center>";
    }
?>