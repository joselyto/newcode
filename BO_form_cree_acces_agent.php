<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>MINISTERE DE LA SANTE PUBLIC</title>
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
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
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
<body class="login-page">
    <?php
		

        require_once('BDD/bdd.php');
		$id_zone =  $_GET['id_zone'];
	
        $query = $connexion->query("SELECT * FROM aire_sante WHERE id_zs = $id_zone ");

        $query1 = $connexion->query('SELECT * FROM type_users');

        $query2 = $connexion->query('SELECT * FROM grade');
        

    ?>
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="vendors/images/min_logo.png" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="#">Crée l'accès pour l'agent</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/min.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="register-box bg-white box-shadow border-radius-10">
						<div class="wizard-content">
							<form class="tab-wizard2 wizard-circle wizard" action="BO_form_cree_acces_agent_action.php" method="post">
								<h5></h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label" >Nom</label>
											<div class="col-sm-8">
												<input type="hidden" class="form-control" name="id_agent" value="<?php echo $_GET['id_agent'] ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label" >Nom</label>
											<div class="col-sm-8">
												<input disabled type="text" class="form-control" name="nom" value="<?php echo $_GET['nom'] ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Postnom</label>
											<div class="col-sm-8">
												<input type="text" disabled class="form-control" name="postnom" value="<?php echo $_GET['postnom'] ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Prénom</label>
											<div class="col-sm-8">
												<input type="text" disabled class="form-control" name="prenom" value="<?php echo $_GET['prenom'] ?>">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-sm-4 col-form-label">Adresse</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="adresse" disabled value="<?php echo $_GET['adresse'] ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Grade</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="grade" disabled value="<?php echo $_GET['grade'] ?>">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-sm-4 col-form-label">Zone de santé</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="zone" disabled value="<?php echo $_GET['zone'] ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Aire de santé</label>
											<div class="col-sm-8">
												<select class="form-control selectpicker" title="Selectionner la zone affecter" name="aire">
												<?php
                                                    while($ligne = $query->fetchObject()) :
                                                ?>
                                                <option value='<?php echo $ligne->id_air_sante?>'><?php echo $ligne->id_air_sante .'-'. $ligne->libelle ?></option>
												<?php endwhile ?>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Type d'accès</label>
											<div class="col-sm-8">
												<select class="form-control selectpicker" title="Selectionner la zone affecter" name="type">
												<?php
                                                    while($ligne1 = $query1->fetchObject()) :
                                                ?>
                                                <option value='<?php echo $ligne1->id_type?>'><?php echo $ligne1->id_type .'-'. $ligne1->libelle ?></option>
												<?php endwhile ?>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Mot de passe</label>
											<div class="col-sm-8">
												<input  type="password" class="form-control" name="password">
											</div>
										</div>
 
                                        <div class="form-group row">
										
											<div class="col-sm-8">
												<input type="hidden" class="form-control" value='<?php echo rand() ?>' name="hidden">
											</div>
										</div>
									</div>
                                    	<div class="form-group row">
											<label class="col-sm-4 col-form-label"></label>
											<div class="col-sm-8">
												<input type="submit" class="btn btn-primary btn-lg" value="valider les informations">
											</div>
										</div>
								</section>
                            </form>
								
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	<!-- success Popup html End -->
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>
</body>

</html>