<!DOCTYPE html>
	<html lang="pt-br">
	<head>
	<meta charset="utf-8" />
	<title>Localizar IP</title>
	<meta name="author" content="Erlan Lucio">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="path/js/custom.js"></script>
	<script src="path/js/notification.js"></script>
	<link rel="icon" href="path/images/fav.ico" type="image/x-icon" />
	<link href="path/css/bootstrap.css" rel='stylesheet' type='text/css'>
	<link href="path/css/animate.css" rel='stylesheet' type='text/css'>
	<link href='path/css/notification.css' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="path/css/font-awesome.min.css">
</head>
<style type="text/css">
	@font-face {
		font-family: BebasNeue;
		src: url(path/fonts/BebasNeueThin.otf);

	}

	#down {
		margin: 20px;

	}
</style>
<body>
<form method="POST">
	<div id="down" class="animated bounceInDown" id="formulario">
		<table class="display" id="example">
			<center>
				<i style="font-size:180px;" class="fa fa-map-marker" aria-hidden="true"></i><br>
				<span style="font: 50px BebasNeue, serif;">Localizador de Ip</span>
				<div class="form-inline">
					<textarea name="ccs" id="down"  class="btn btn-success" placeholder="Digite o IP" rows="1" class="form-control" style=" cursor: auto; width: 250px; height: 40px;  30px; max-height:text-align: center;" placeholder=""></textarea>

					<div class="form-inline">
						<button type="submit"  name="testar" value="Iniciar " onclick="start()" class="fcbtn btn btn-warning btn-outline btn-1e btn-squared">Pesquisar</button>

		</table>
	</div>
	</div>
</form>

<!-- Copyright -->

<div id="down" class="footer-copyright text-center py-3">© 2019 Copyright:
	<a href="https://www.linkedin.com/in/erlan-lucio-760745183/"> Erlan Lucio</a>
</div>
</div>
<!-- Copyright -->
</body>

</html>
		<?php
		error_reporting(0);
if ($_POST['ccs']) {
	$Search_Ip =  substr($_POST['ccs'], 0, 17);

	$api_jsonn = file_get_contents("http://Ip-api.com/json/".$Search_Ip);
			

	$Ip1 = explode('"query":"', $api_jsonn); $Ip2 = explode('",',$Ip1[1]); $Ip = $Ip2[0];

	$Region1 = explode('"regionName":"', $api_jsonn); $Region2 = explode('",', $Region1[1]); $Region = $Region2[0];

	$Country1 = explode('"country":"', $api_jsonn); $Country2 = explode('",', $Country1[1]); $Country = $Country2[0];

	$City1 = explode('"city":"', $api_jsonn); $City2 = explode('",', $City1[1]); $City = $City2[0];

	$Net1 = explode('"isp":"', $api_jsonn); $Net2 = explode('",', $Net1[1]); $Net = $Net2[0];

	$result =" <center><b   class=\"btn btn-danger\"	 style=\"cursor: Text;\"		>
	 <b>IP</b>: "			.$Ip.         "<br>
	 <b>CIDADE</b>: "   	.$City.       "<br>
	 <b>ESTADO</b>: "   	.$Region.     "<br>
	 <b>PAIS</b>: "    	    .$Country. 	  "<br>
	 <b>PROVEDOR</b>: "		.$Net.        "<br>
   								  ";

	echo $result;

	} else {
		
 };
?>
		
