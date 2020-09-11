<?php
// Criado por Marcos Peli
// ultima atualização 26/03/2020 - Scripts alterados para utilização do captcha sonoro, unica opção após a atualização da receita com recaptcha do google
// o objetivo dos scripts deste repositório é integrar consultas de CNPJ e CPF diretamente da receita federal
// para dentro de aplicações web que necessitem da resposta destas consultas para proseguirem, como e-comerce e afins.
// importante, CPF e DATA de NASCIM. devem ser digitados no formato ###.###.###-##  e  dd/mm/aaaa
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
    <meta name="description" content="Consultar CPF">
    <meta name="keywords" content="Consultar CPF">

    <!-- Title Page-->
    <title>Consultar CPF</title>

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
                    <h2 class="title">Consultar CPF</h2>
                    <form autocomplete="off" id="receita_cpf" name="receita_cpf" method="post" action="resultado_consulta_cpf.php">
                        <div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<input class="input--style-1 cpf-mask" type="text" name="cpf" required pattern="^(\d{3}\.\d{3}\.\d{3}-\d{2})|(\d{11})$"
			placeholder="CPF" title="Digite o CPF no formato: xxx.xxx.xxx-xx">
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<input class="input--style-1 js-datepicker date-mask" type="text" placeholder="Data de Nascimento" name="txtDataNascimento" minlength="10" maxlength="10" required title="Digite a Data de Nascimento no formato: DD/MM/YYYY">
									<i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
								</div>
							</div>
                        </div>
						<br />                           
						<img id="captcha_cpf" src="<?php echo $imagem_cpf; ?>" border="0">
						<br />
						<div class="col-2">
							<div class="input-group">
								<input autocomplete="off" placeholder="Digite o Captcha acima" class="input--style-1" type="text" name="captcha_cpf" minlength="6" maxlength="6" required>
							</div>
						</div>
						<br />
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Consultar CPF</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
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
