<?php

$a = ltrim($_SERVER['REQUEST_URI'], '/');
$rotas = explode( '/' , $a );

$conect = mysqli_connect("localhost","root","","links");
if(mysqli_connect_errno()){die("XXXX");}

$ok = "slash";

if( $rotas[1] == "")
{
    include("test2.php");
}
else
{
    $teste = mysqli_query($conect,"SELECT nick FROM users WHERE nick = '$rotas[1]' " ); 
    if(mysqli_fetch_row($teste))
    {
        include("perfil.php");
    }
    else
    {
        echo "ERRO: perfil nao encontrado.";
    }
}

?> 
	  