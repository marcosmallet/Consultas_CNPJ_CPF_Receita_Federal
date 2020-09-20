<?php
require('../funcoes.php');

error_reporting(E_ERROR | E_WARNING | E_PARSE);

// dados da postagem do formulario de CPF
$cpf = $_POST['cpf'];						// Entradas POST devem ser tratadas para evitar injections
$datanascim = $_POST['txtDataNascimento'];	// Entradas POST devem ser tratadas para evitar injections
$captcha_cpf = $_POST['captcha_cpf'];		// Entradas POST devem ser tratadas para evitar injections

if($cpf AND $datanascim AND $captcha_cpf) {
	$getHtmlCPF = getHtmlCPF($cpf, $datanascim, $captcha_cpf);
	$campos = parseHtmlCPF($getHtmlCPF);
} else {
	header("Location: ./", true, 301);
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Consultando CPF - Resultado">
    <meta name="keywords" content="Consultando CPF - Resultado">

    <!-- Title Page-->
    <title>Resultado</title>

    <!-- Icons font CSS-->
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="../css/css.css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/main.css" rel="stylesheet" media="all">
	<style>
		.footer {
		   position: fixed;
		   left: 0;
		   bottom: 0;
		   width: 100%;
		   color: white;
		   text-align: center;
		}
	</style>
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Resultado</h2>
					<div class="input-group"  <?= $campos["status"]=="OK" ? " style='display: none;'" : ""?>>
						<b style="color: red">ERRO: <?=$campos["status"]?></b>
					</div>
					<div class="row row-space" <?= $campos["status"]!="OK" ? " style='display: none;'" : ""?>>
						<div class="input-group">
							Nome: <b><?=$campos[1]?></b>
						</div>
					</div>
					<div class="row row-space" <?= $campos["status"]!="OK" ? " style='display: none;'" : ""?>>
						<div class="input-group">
							CPF: <b><?=$campos[0]?></b>
						</div>
					</div>
					<div class="row row-space" <?= $campos["status"]!="OK" ? " style='display: none;'" : ""?>>
						<div class="input-group">
							Data de Nascimento: <b><?=$campos[2]?></b>
						</div>
					</div>
					<div class="row row-space" <?= $campos["status"]!="OK" ? " style='display: none;'" : ""?>>
						<div class="input-group">
							Situação Cadastral: <b><?=$campos[3]?></b>
						</div>
					</div>
					<div class="p-t-20">
						<button class="btn btn--radius btn--green" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processando" onclick="location.href='./';">Consultar outro CPF</button>
					</div>
                </div>
            </div>
        </div>
		<div class="footer">
		  <p>Consultando.sytes.net</p>
		</div>
    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery/jquery.min.js"></script>
	<script src="../vendor/jquery/jquery-2.0.3.min.js"></script>

    <!-- Main JS-->
    <script src="../js/global.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script>
		$('button').on('click', function() {
			var $this = $(this);
			$this.button('loading');
		});
	</script>
</body>

</html>
<!-- end document-->
