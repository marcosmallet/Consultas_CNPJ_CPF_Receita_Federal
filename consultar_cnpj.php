<?php
// Criado por Marcos Peli
// ultima atualização 26/03/2020 - Scripts alterados para utilização do captcha sonoro, unica opção após a atualização da receita com recaptcha do google
// o objetivo dos scripts deste repositório é integrar consultas de CNPJ e CNPJ diretamente da receita federal
// para dentro de aplicações web que necessitem da resposta destas consultas para proseguirem, como e-comerce e afins.
// importante, CNPJ e DATA de NASCIM. devem ser digitados no formato ###.###.###-##  e  dd/mm/aaaa
// CNPJ devem ser digitados só NUMEROS   ###########  (sem ponto ou hifem)
// essas entradas nâo foram tratadas, pois o objetivo é apenas a implementaçâo da soluçao das consulta e testes

include("getcaptcha.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Consultar CNPJ">
    <meta name="keywords" content="Consultar CNPJ">

    <!-- Title Page-->
    <title>Consultar CNPJ</title>

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
                    <h2 class="title">Consultar CNPJ</h2>
                    <form autocomplete="off" id="receita_cnpj" name="receita_cnpj" method="post" action="resultado_consulta_cnpj.php">
                        <div class="col-2">
							<div class="input-group">
								<input class="input--style-1" type="text" name="cnpj" minlength="14" maxlength="14" placeholder="CNPJ (Somente Números)" title="Digite o CNPJ (Somente números)" pattern="[0-9]+" required>
							</div>
                        </div>
						<br />                           
						<img id="captcha_cnpj" src="<?php echo $imagem_cnpj; ?>" border="0">
						<br />
						<div class="col-2">
							<div class="input-group">
								<input autocomplete="off" placeholder="Digite o Captcha acima" class="input--style-1" type="text" name="captcha_cnpj" minlength="6" maxlength="6" required>
							</div>
						</div>
						<br />
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Consultar CNPJ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.0.3.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
	
	<script src="js/locastyle.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
