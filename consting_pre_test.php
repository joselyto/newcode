<?php
session_start();
	require('BDD/bdd.php');
	require_once("head.php");
	require_once("header.php");
	require_once("menu.php");	
	$query = $connexion->query('SELECT * FROM DPS');

 
?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
        
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
                <div class="title" style="width: 100%; display:flex; justify-content:center; padding-bottom:2%;">
                    <h3><?php echo $_GET['num_fiche'] ?></h3>
                </div>
                    
                <form action="consting_pre_test_action.php" method="POST">
                <div class="row">
                  
                    <div class="col-md-6">
                        <div class="form-group">
                            Nom : <?php echo $_GET['nom'] ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            Sexe : <?php echo $_GET['sexe'] ?>
                        </div>
                    </div>
				</div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            Postnom : <?php echo $_GET['postnom'] ?>	
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            Etat civil : <?php echo $_GET['etat'] ?>
                        </div>
                    </div>
				</div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            Prénom : <?php echo $_GET['prenom'] ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            Date de naissance : <?php echo $_GET['date_naiss'] ?>
                        </div>
                    </div>
				</div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                                <label class="weight-600">Technique Utiliser</label>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio"  value="TDR" name="technique" id="technique1" class="custom-control-input" required>
                                    <label class="custom-control-label" for="technique1">Test de diagnostic Rapide (TDR)</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" value="Electrophorese" id="technique2" name="technique" class="custom-control-input">
                                    <label class="custom-control-label" for="technique2">Electrophose Hemoglobine</label>
                                </div>
                        </div>
                    </div>
                
                </div>
								
				</div>
                
				<div class="html-editor pd-20 card-box mb-30">
					<h4 class="h4 text-blue">Consting pre-test</h4>
					<p>Espace Medecin</p> 
                    <input type="hidden" name="num_fiche" value="<?php echo $_GET['num_fiche'] ?>" >
                    <input type="hidden" name="id_cons" value="<?php echo $_GET['id_cons'];?>" >
                    <input type="hidden" name="id_v" value="<?php echo $_GET['id_v'];?>" >
					<textarea name= "texte" class="textarea_editor form-control border-radius-0" placeholder="Saisie Consting pre test ..." name = "consting" required></textarea>
                    <div class="pd-24 card-box height-120-p">	
							<input type="submit" class="btn btn-secondary btn-lg btn-block" value="Enregistrer">
						</div>
					</div>
                </div>
                </form>
			</div>
		
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>