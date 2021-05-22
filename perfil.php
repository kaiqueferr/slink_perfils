<?php

$serv = "localhost";
$user = "root";
$senha = "";
$bb = "links";
$conect = mysqli_connect($serv,$user,$senha,$bb);
if(mysqli_connect_errno()){die("XXXX");}

$tt = mysqli_query($conect,"SELECT nick, nome, foto, capa FROM users WHERE nick = '$rotas[1]'"); 
$pBank = mysqli_fetch_row($tt);

 $nome = $pBank[1]; 
 $foto = $pBank[2]; 
 $capa = $pBank[3];

 $lt_back = mysqli_query($conect,"SELECT lt1, lt2 ,lt3 ,lt4 FROM mylink "); 
 $lt = mysqli_fetch_row($lt_back);

?> 

<!DOCTYPE html>
<html>
<style>
html {
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0); 
}
body
{
	background-size: 100%;
    background-color: black;
	background-attachment: fixed;
	margin: 0;
	padding: 0;
	min-width: 350px;
	height: auto;
	
}

main
{
	width: auto;
    height: auto;
	margin-top: 170px;
  
    position:absolute;
    bottom:5px;
    top: 5px;
    left: 15%;
    right: 15%;
	background-color: white;
	padding-bottom: 10px;
	/* border: solid 1px rgb(179, 179, 179); */
	border-radius: 10px;
	border: solid 1px rgb(239,240,242);
	
}

.link1
{
	width: 70%;
	border: solid 1px rgb(236,236,236);
	margin-left: 15%;
	text-align: center;
	padding: 10px;
	margin-top: 30px;
	border-radius: 10px;
	background-color: rgb(248,249,251);
	box-shadow: 5px 5px;
	
}
.link1:hover
{
	border: solid 1px black;
	background-color: rgb(236,236,236);
}

.links
{
 width: 100%;
 height: auto;
}

.links a
{
	text-decoration: none;
	color: black;
	outline: none;
	box-shadow: none;
	
}

.capa
{
    margin-left: 15%;
	margin-right: 15%;
	margin-top:5px;
	background-image: url(<?php echo $capa; ?>);
	height: 145px;
	border-radius: 10px;
	margin-bottom: 30px;
	background-position: center;
	background-size: cover;
	
}
.logo
{
 position: absolute; 
bottom: 0;
width: 100%;
text-align: center;
}
.capa p
{
	 -webkit-text-stroke-width: 0.3px; 
   -webkit-text-stroke-color: rgb(0, 0, 0);  
	font-weight: bolder;
	font-size: 30px;
	float: left;
	margin-top: 110px;
	margin-left: 10px;
	color: white;
	text-shadow: 1px 1px 2px black;
}

.perfil
{
	width: 100px;
	height: 100px;
	background-image: url(<?php echo $foto; ?>);
	background-position: center;
	background-size: cover;
	border-radius: 54px;
	margin-top: 60px;
	margin-left: 20px;
	float: left;
	border: solid 4px rgb(0,0,0);
}


@media screen and (max-width: 955px)
{

	main
{
	width: auto;
    height: auto;
	margin-top: 170px;
    bottom:5px;
    top: 5px;
    left: 3%;
    right: 3%;
	background-color: white;
	padding-bottom: 10px;
	/* border: solid 1px rgb(179, 179, 179); */
	border-radius: 10px;
	border: solid 1px rgb(239,240,242);
	
}		

.capa
{
    margin-left: 3%;
	margin-right: 3%;
}


.link1
{
	width: 80%;
	border: solid 1px rgb(236,236,236);
	margin-left: 8%;
	text-align: center;
	padding: 10px;
	margin-top: 30px;
	border-radius: 10px;
	background-color: rgb(248,249,251);
	
}
.capa p
{

	font-size: 20px;

}

}

@media screen and (max-height: 390px)
{	
	
}
</style>
	<head>
		<meta charset="utf-8">
		<!-- <link rel="stylesheet" href="style.css"> -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="ww.js"></script>
		
		<meta name="viewport" content="width=device-width">
		<title><?php echo $nome . " | Sllink"; ?></title>

	</head>
	<body>
		<header>
			<div class="capa" >
				<div class="perfil" ></div>
				<p><?php echo $nome; ?> </p>

			</div>
		</header>
		<main id="demo" >
			<div id="lks"  class="links" >
				<a href=""><div class="link1">  <?php echo $lt[0]; ?> </div></a>
				<a href=""><div class="link1" > <?php echo $lt[1]; ?> </div></a>
				<a href=""><div class="link1" > <?php echo $lt[2]; ?> </div></a>
				<a href=""><div class="link1" > <?php echo $lt[3]; ?> </div></a>
			</div>
			<div class="logo" > 
				<img src="logo2.png" width="auto" height="30px"> 
			</div>
        </main>
</body>
</html>

<script>
	window.addEventListener('resize', function (){ aa(); });
	function aa()
	{
		let tt = window.innerHeight;
		let test =  document.getElementById("demo");
		let lks =  document.getElementById("lks");
		let div = lks.clientHeight;
		//test.innerHTML = div + " - " + tt ;
		
		if(tt >  div + 300)
		{
			test.style.height = tt - 192 + "px";
		}
		else
		{
			test.style.height = div + 120 + "px";
		}
	
	}
	aa();
	</script>
	  
	<?php

	mysqli_close($conect);

	?>