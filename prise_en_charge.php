<?php
session_start();	
if(isset($_SESSION['nom']))
{
//require("BDD/bdd.php");
require('BDD/bdd_count.php');
require_once("head.php");
require_once("header.php");
require_once("menu.php");




//$nombre = $query1->fetchArray();
//var_dump(count($nombre));
?>
		<!-----------------------------------Menu principal------------------------------------------------>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="vendors/images/ux.jpg" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Bienvenue <div class="weight-600 font-30 text-blue">Bienvenue au Tableau de bord de la prise en charge</div>
						</h4>
						<p class="font-18 max-width-600">Ici vous retrouvez une bref statistique de données</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
						
							<div class="widget-data">
								<div class="h4 mb-0">
									<?php
								
										$query = "SELECT * FROM resultat WHERE type_res = 'SS' order by id_res";
										$query1 = mysqli_query($connection, $query);
										$ligne = mysqli_num_rows($query1);
										echo '<h2>' . $ligne . '</h2>';
								
									?>
								</div>
								<div class="weight-600 font-14">SS</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
						
							<div class="widget-data">
								<div class="h4 mb-0">
								<?php  
									
										$query2 = "SELECT
										res.type_res AS type_res,
										v.sexe AS sexe
										FROM volontaire v
									
                                        JOIN enregistrement enr ON v.id_v = enr.id_v
                                        JOIN resultat res ON enr.num_fiche = res.num_fiche 
									   	WHERE type_res='SS' AND sexe = 'F'"
										;
										$query3 = mysqli_query($connection, $query2);
										$ligne1 = mysqli_num_rows($query3);
										echo '<h2>' . $ligne1 . '</h2>';
								
									?>

								</div>
								<div class="weight-600 font-14">Femmes SS</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							<div class="widget-data">
								<div class="h4 mb-0">
								<?php
						
								$query3 = "SELECT
								res.type_res AS type_res,
								v.sexe AS sexe
								FROM volontaire v
							
								JOIN enregistrement enr ON v.id_v = enr.id_v
								JOIN resultat res ON enr.num_fiche = res.num_fiche 
								   WHERE type_res='SS' AND enceinte = 'oui'"
								
								;
										$query4 = mysqli_query($connection, $query3);
										$ligne2 = mysqli_num_rows($query4);
										echo '<h2>' . $ligne2 . '</h2>';
				
								?>
								</div>
								<div class="weight-600 font-14">Femmes enceintes SS</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							<div class="widget-data">
								<div class="h4 mb-0">
								<?php
							
								$query5 = "SELECT * from volontaire";
										$query6 = mysqli_query($connection, $query5);
										$ligne3 = mysqli_num_rows($query6);
										echo '<h2>' . $ligne3 . '</h2>';
							
				
								?>
								</div>
								<div class="weight-600 font-14">Volontaires Enregistrers</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!---------------------------------------------------------------------->

			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
						
							<div class="widget-data">
								<div class="h4 mb-0">
									<?php
								
										$query = "SELECT * FROM resultat WHERE type_res = 'AA' order by id_res";
										$query1 = mysqli_query($connection, $query);
										$ligne = mysqli_num_rows($query1);
										echo '<h2>' . $ligne . '</h2>';
								
									?>
								</div>
								<div class="weight-600 font-14">AA</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
						
							<div class="widget-data">
								<div class="h4 mb-0">
								<?php  
									
										$query2 = "SELECT
										res.type_res AS type_res,
										v.sexe AS sexe
										FROM volontaire v
									
                                        JOIN enregistrement enr ON v.id_v = enr.id_v
                                        JOIN resultat res ON enr.num_fiche = res.num_fiche 
									   	WHERE type_res='AA' AND sexe = 'F'"
										;
										$query3 = mysqli_query($connection, $query2);
										$ligne1 = mysqli_num_rows($query3);
										echo '<h2>' . $ligne1 . '</h2>';
								
									?>

								</div>
								<div class="weight-600 font-14">Femmes AA</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							<div class="widget-data">
								<div class="h4 mb-0">
								<?php
						
								$query3 = "SELECT
								res.type_res AS type_res,
								v.sexe AS sexe
								FROM volontaire v
							
								JOIN enregistrement enr ON v.id_v = enr.id_v
								JOIN resultat res ON enr.num_fiche = res.num_fiche 
								   WHERE type_res='AS' "
								;
										$query4 = mysqli_query($connection, $query3);
										$ligne2 = mysqli_num_rows($query4);
										echo '<h2>' . $ligne2 . '</h2>';
				
								?>
								</div>
								<div class="weight-600 font-14"> AS</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							<div class="widget-data">
								<div class="h4 mb-0">
								<?php
							
								$query5 = "SELECT * from prelevement WHERE technique = 'TDR'";
										$query6 = mysqli_query($connection, $query5);
										$ligne3 = mysqli_num_rows($query6);
										echo '<h2>' . $ligne3 . '</h2>';
							
				
								?>
								</div>
								<div class="weight-600 font-14">Prelevement TDR</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-8 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Activity</h2>
						<div id="chart5"></div>
					</div>
				</div>
				<div class="col-xl-4 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Lead Target</h2>
						<div id="chart6"></div>
					</div>
				</div>
			</div>
			
		
		</div>

		<!---------------------------------------------->

		
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>


</body>
</html>
<?php
}else{
		require('erreur.html');
	?>
	
<?php
}
?>