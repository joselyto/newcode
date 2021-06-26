<?php
session_start();
	require('BDD/bdd.php');
	require_once("head.php");
	require_once("header.php");
	require_once("menu.php");
    $id_zs = $_GET['id_zs'];
    $zs = $_GET['zs'];
    $id_dps = $_GET['id_dps'];
    $dps = $_GET['dps'];

	var_dump($id_zs);

	$query = $connexion->query("SELECT * FROM aire_sante WHERE id_zs = $id_zs  ");
?>
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
					<!-- Select-2 end -->
				<!-- Bootstrap Select Start -->
                <div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h6 class="text-blue h4"><?php echo $dps ?> / <?php echo $zs?></h6>
							
						</div>
					</div>
				</div>
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Veuillez choisir une Aire de santé pour l'enregistrement</h4>
							
						</div>
					</div>
				</div>
	
				<!-- Bootstrap Select End -->		
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<p class="mb-0"> </p>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
							
									<th>N°</th>
									<th>Aire de santé</th>
                                    <th></th>
															
								</tr>
							</thead>
							<tbody>
							<?php
                                while ( $ligne = $query->fetchObject() ) :
                            ?>
								<tr>
									<td><?php echo $ligne->id_air_sante ?></td>
									<td><?php echo $ligne->libelle ?></td>
									<td><a href="form_enregistrement.php?id_air=<?php echo $ligne->id_air_sante ?>&amp;air=<?php echo $ligne->libelle ?>&amp;id_dps=<?php echo $id_dps ?>&amp;dps=<?php echo $dps ?>&amp;id_zs=<?php echo $id_zs?>&amp;zs=<?php echo $zs ?>"><button type="button" class="btn btn-primary">Choix</button></a></td>
						
								</tr>
								<?php endwhile ; ?>	
							</tbody>
						</table>
					</div>
				</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script></body>
</html>
<?php
