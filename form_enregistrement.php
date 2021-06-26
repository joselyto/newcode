<?php
session_start();
if(isset($_SESSION['nom']))
{

require("head_enregistrement_form.php");
require_once("header.php");
require_once("menu.php");

$id_zs = $_GET['id_zs'];
$zs = $_GET['zs'];
$id_dps = $_GET['id_dps'];
$dps = $_GET['dps'];
$id_air = $_GET['id_air'];
$air = $_GET['air'];

?>

	<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
					<!-- Select-2 end -->
				<!-- Bootstrap Select Start -->
                <div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h6 class="text-blue h4"><?php echo $dps ?>  /  <?php echo $zs?>  /  <?php echo $air ?></h6>

						</div>
					</div>
				</div>
			</div>
	
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
			
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<h4 class="text-blue h4">Enregistrement</h4>
						<p class="mb-30">Pour le depistage</p>
					</div>
					<div class="wizard-content">
						<form class="tab-wizard wizard-circle wizard" action="form_enregistrement_action.php" method="post">
							<h5>Identité Personnel</h5>
							<input type="hidden" class="form-control" name="id_dps" value="<?php echo $id_dps?>">
							<input type="hidden" class="form-control" name="id_zs" value="<?php echo $id_zs?>">
							<input type="hidden" class="form-control" name="id_air" value="<?php echo $id_air ?>" >
							<input type="hidden" class="form-control" name="air" value="<?php echo $air  ?>" >
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label >Nom :</label>
											<input type="text" class="form-control" name="nom" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Post Nom :</label>
											<input type="text" class="form-control" name="post" required> 
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Prenom :</label>
											<input type="text" class="form-control" name="prenom" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Numero Telephone  :</label>
											<input type="text" class="form-control" name="tel" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Genre :</label>
											<select class="custom-select form-control" name="genre" required>
												<option value=""></option>
												<option value="M">M</option>
												<option value="F">F</option>
											
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
												<label class="weight-600">Enceinte</label>
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio1" value="non" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio1">Non</label>
												</div>
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="customRadio2" value="oui" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio2">Oui</label>
												</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Etat civil :</label>
											<select class="custom-select form-control" name="civil" required> 
												<option value=""></option>
												<option value="Celibataire">Celibataire</option>
												<option value="Marié(e)">Marié(e)</option>
												<option value="">Divorcé(e)</option>
												<option value="Veuf(ve)">Veuf(ve)</option>
											
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Date de Naissance :</label>
											<input type="Date" class="form-control" name="date" required>
										</div>
									</div>
								</div>


							
								
							
							<!-- Step 2 -->
							<h5>Adresse</h5>
							
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>N° Avenue :</label>
											<input type="text" class="form-control" name="num" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>avenue :</label>
											<input type="text" class="form-control" name="avenue" required>
										</div>
									</div>
								
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Quartier :</label>
											<input type="text" class="form-control" name="quartier" required> 
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Commune/Village :</label>
											<input type="text" class="form-control" name="commune" required>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Ville :</label>
											<input type="text" class="form-control" name="ville" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Province :</label>
											<input type="text" class="form-control" name="province" required>
										</div>
									</div>
								</div>

								<div class="">
									<div class="pd-24 card-box height-120-p">			
											<input type="submit" class="btn btn-secondary btn-lg btn-block" value="Enregistrer">
										</div>
									</div>
							</section>
						</form>
					</div>
				</div>

				
				
			</div>
			
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>
</body>
</html>
<?php
}else{
		require('erreur.html');
	?>
	
<?php
}
?>