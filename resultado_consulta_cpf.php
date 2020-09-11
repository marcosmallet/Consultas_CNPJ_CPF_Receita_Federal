<?php
// Criado por Marcos Peli
// ultima atualização 26/03/2020 - Scripts alterados para utilização do captcha sonoro, unica opção após a atualização da receita com recaptcha do google
// o objetivo dos scripts deste repositório é integrar consultas de CNPJ e CPF diretamente da receita federal
// para dentro de aplicações web que necessitem da resposta destas consultas para proseguirem, como e-comerce e afins.

require('funcoes.php');

error_reporting(E_ERROR | E_WARNING | E_PARSE);

// dados da postagem do formulario de CPF
$cpf = $_POST['cpf'];						// Entradas POST devem ser tratadas para evitar injections
$datanascim = $_POST['txtDataNascimento'];	// Entradas POST devem ser tratadas para evitar injections
$captcha_cpf = $_POST['captcha_cpf'];		// Entradas POST devem ser tratadas para evitar injections

if($cpf AND $datanascim AND $captcha_cpf)
{
	$getHtmlCPF = getHtmlCPF($cpf, $datanascim, $captcha_cpf);
	$campos = parseHtmlCPF($getHtmlCPF);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Consultar CPF">
    <meta name="keywords" content="Consultar CPF">

    <!-- Title Page-->
    <title>Consultar CPF - Resultado</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Consultar CPF - Resultado</h2>
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
						<button class="btn btn--radius btn--green" onclick="location.href='./consultar_cpf.php';">Consultar outro CPF</button>
					</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
