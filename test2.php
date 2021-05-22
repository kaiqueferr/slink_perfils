<?php

$serv = "localhost";
$user = "root";
$senha = "";
$bb = "links";
$conect = mysqli_connect($serv,$user,$senha,$bb);


if(mysqli_connect_errno()){die("XXXX");}
$tt = mysqli_query($conect,"SELECT nick, nome, foto, capa FROM users"); 

if(mysqli_fetch_row($tt))
{
	$nome = mysqli_fetch_row($tt)[2];
}

echo "Welcome to Sllink!";



?> 

	  
<?php

	mysqli_close($conect);

?>