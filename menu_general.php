<?php
	if(isset($_SESSION['nom']))
	{

?>

<!DOCTYPE html>
<html>

<head>
	
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>MINISTERE DE LA SANTE PNLCD</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>

	


	
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
			
				<div class="row clearfix">
					<div class="col-md-6 col-sm-12 mb-30">
						       
						</div>
					</div>
					
					<div class="col-md-6 col-sm-12 mb-30">
						
					</div>
					
			
					<div class="col-md-6 col-sm-12 mb-30">
					
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							
							<p>Veuillez selectionner votre services</p>
							<div class="btn-list">
								<button type="button" class="btn btn-secondary btn-lg btn-block" disabled>SECRETARIAT</button>
								<button type="button" class="btn btn-secondary btn-lg btn-block" disabled>DIVISION ADMINISTRATION</button>
								
								<a class="btn btn-secondary btn-lg btn-block" href="prise_en_charge.php" disabled>DIVISION PRISE EN CHARGE</a>
							
								<button type="button" class="btn btn-secondary btn-lg btn-block" disabled>DIVISION TECHNIQUE</button>
								<button type="button" class="btn btn-secondary btn-lg btn-block" disabled>DIVISION PLANIFICATION</button>

							</div>
						</div>
					</div>

			
</body>

</html>

<?php
}else{
	?>
	<h2>N'essayer pas d'acceder au page par URL sinon vous serez bloquer </h2>
<?php
}
?>	