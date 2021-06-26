<?php
session_start();
if(isset($_SESSION['nom']))
{

require("head_enregistrement_form.php");
require_once("header.php");
require_once("menu.php");

?>

	<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
					<!-- Select-2 end -->
				<!-- Bootstrap Select Start -->
             
			</div>
	
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
			
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<h4 class="text-blue h4">Prelevement</h4>
			
					</div>
					<div class="wizard-content">
						<form class="tab-wizard wizard-circle wizard" action="form_prelevement_action.php" method="post">
                        <input type="hidden" name="technique" value="<?php echo $_GET['technique'] ?>">
                        <input type="hidden" name="num_fiche" value="<?php echo $_GET['num_fiche'] ?>">
                                <div class="title" style="width: 100%; display:flex; justify-content:center; padding-bottom:2%;">
                                    <h3><?php echo $_GET['num_fiche'] ?></h3>
                                </div>
					
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label >Numero echantillon :</label>
											<input type="text" class="form-control" name="num_ech" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Quantité Prelever :</label>
											<input type="text" class="form-control" name="qte" required> 
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