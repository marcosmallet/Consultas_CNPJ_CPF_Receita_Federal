<?php
include("getcaptcha.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Consultando">
    <meta name="keywords" content="Consultando">
	<meta name="google-site-verification" content="t83v63j3r9ryJu4NJrgxgPjxth_DgbpDmC9Sf9Hjmiw" />
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-68896019-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-68896019-2');
	</script>

    <!-- Title Page-->
    <title>Consultando</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="css/css.css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
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
                    <h2 class="title">Consultando</h2>
					<div class="row row-space">
						<div class="col-2">
							<div class="p-t-20">
								<button class="btn btn--radius btn--green" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processando" onclick="location.href='./cpf';">Consultar CPF</button>
							</div>
						</div>
						<div class="col-2">
							<div class="p-t-20">
								<button class="btn btn--radius btn--green" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processando" onclick="location.href='./cnpj';">Consultar CNPJ</button>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
		<div class="footer">
		  <p>Consultando.sytes.net</p>
		</div>
    </div>
	<script src="./vendor/jquery/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script>
		$('button').on('click', function() {
			var $this = $(this);
			$this.button('loading');
		});
	</script>
</body>
</html>
<!-- end document-->
