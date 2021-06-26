<?php
	session_start();
	require('BDD/bdd.php');
	require_once("head.php");
	require_once("header.php");
	require_once("menu.php");

	
	$query = $connexion->query("SELECT
	v.nom AS nomV,
	v.postnom AS postNV,
	v.prenom AS prenomV,
	v.num_tel AS numTelV,
	v.sexe AS sexeV,
	v.date_naiss AS dateV,
	v.etat_civil AS etat_civilV,
	v.num_avenue AS numAV,
	v.avenue AS avenueV,
	v.quartier AS quartierV,
	v.comm_ville AS communeV,
	v.ville AS villeV,
	v.province AS provinceV,
	res.type_res AS typeRes,
	res.id_res AS numRes,
	res.observation AS observation,
	pr.technique AS technique
	FROM volontaire v
	JOIN enregistrement enr ON v.id_v = enr.id_v
	JOIN resultat res ON enr.num_fiche = res.num_fiche
	JOIN prelevement pr ON res.num_fiche = pr.num_fiche");


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
							<h4 class="text-blue h4">RESULTATS</h4>
							
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
									<th>Nom</th>
									<th>Post Nom</th>
									<th>Prenom</th>
									<th>Date de naiss</th>
									<th>Technique Utiliser</th>
									<th>resultat</th>
									<th>Observation</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php

                                while ( $ligne = $query->fetchObject() ) :
                            ?>

								<tr>
									<td><?php echo $ligne->numRes ?></td>
									<td><?php echo $ligne->nomV ?></td>
									<td><?php echo $ligne->postNV ?></td>
									<td><?php echo $ligne->prenomV ?></td>
									<td><?php echo $ligne->dateV ?></td>
									<td><?php echo $ligne->technique ?></td>
									<td><?php echo $ligne->typeRes ?></td>
									<td><?php echo $ligne->observation ?></td>
									<td>
									

												<div class="dropdown">
												<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
													<i class="dw dw-more"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="test_pdf_other.php?id_numRes=<?php echo $ligne->numRes ?>&amp;nomV=<?php echo $ligne->nomV ?>&amp;postNV=<?php echo $ligne->postNV ?>&amp;prenomV=<?php echo $ligne->prenomV ?>&amp;numTelV=<?php echo $ligne->numTelV ?>&amp;sexeV=<?php echo $ligne->sexeV ?>&amp;dateV=<?php echo $ligne->dateV ?>&amp;etat_civilV=<?php echo $ligne->etat_civilV ?>&amp;numAV=<?php echo $ligne->numAV ?>&amp;avenueV=<?php echo $ligne->avenueV ?>&amp;quartierV=<?php echo $ligne->quartierV ?>&amp;communeV=<?php echo $ligne->communeV ?>&amp;villeV=<?php echo $ligne->villeV ?>&amp;provinceV=<?php echo $ligne->provinceV ?>&amp;typeRes=<?php echo $ligne->typeRes ?>&amp;numRes=<?php echo $ligne->numRes ?>&amp;technique=<?php echo $ligne->technique ?>&amp;observation=<?php echo $ligne->observation ?> "> <i class="dw dw-eye"></i>Imprimer la carte</a>
												<!--	<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
													<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
					
												-->

											
												</div>
											</div>

									</td>
									<td>
									
									</td>
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
