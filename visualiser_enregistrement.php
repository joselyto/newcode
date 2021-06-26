<?php
session_start();
	require('BDD/bdd.php');
	require_once("head.php");
	require_once("header.php");
	require_once("menu.php");	
	$query = $connexion->query('SELECT * FROM volontaire v 
	LEFT JOIN enregistrement enr ON v.id_v = enr.id_v');
?>


<div class="mobile-menu-overlay"></div>
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
					<!-- Select-2 end -->
				<!-- Bootstrap Select Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">LISTE DES VOLONTAIRES</h4>
							
						</div>
						<div class="pd-20 mb-30">
							<a href="enregistrement_DPS.php"><button type="button" class="btn btn-primary">Nouveau enregistrement</button></a>
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
									<th>Num Fiche</th>
									<th>Nom</th>
									<th>Post Nom</th>
									<th>Prenom</th>
									<th>Genre</th>
									<th>Grossesse</th>
									<th>Date de naiss</th>
									<th>Telephone</th>
									<th>Etat-Civil</th>
									<th>N° av</th>
									<th>Avenue</th>
									<th>Quartier</th>
									<th>Commune</th>
									<th>Ville</th>
									<th>Province</th>								
								</tr>
							</thead>
							<tbody>
							<?php
                                while ( $ligne = $query->fetchObject() ) :
                            ?>
								<tr>
							
									<td class="table-plus"><?php echo $ligne->id_v ?></td>
									<td><?php echo $ligne->num_fiche ?></td>
									<td><?php echo $ligne->nom ?></td>
									<td><?php echo $ligne->postnom ?></td>
									<td><?php echo $ligne->prenom ?></td>
									<td><?php echo $ligne->sexe ?></td>
									<td><?php echo $ligne->enceinte ?></td>
									<td><?php echo $ligne->date_naiss ?></td>
									<td><?php echo $ligne->num_tel ?></td>
									<td><?php echo $ligne->etat_civil ?></td>
									<td><?php echo $ligne->num_avenue ?></td>
									<td><?php echo $ligne->avenue ?></td>
									<td><?php echo $ligne->quartier ?></td>
									<td><?php echo $ligne->comm_ville ?></td>
									<td><?php echo $ligne->ville ?></td>
									<td><?php echo $ligne->province ?></td>
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
