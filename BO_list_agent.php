<?php
session_start();
	require('BDD/bdd.php');
	require_once("head.php");
	require_once("header.php");
	require_once("BO_menu.php");	
	$query = $connexion->query('SELECT 
	ag.id_agent AS idAgent,
	ag.nom AS nomAgent,
	ag.postnom AS postnomAgent,
	ag.prenom AS prenomAgent,
	ag.adresse As adresseAgent,
	z.libelle AS zoneAgent,
    z.id_zs AS idZone,
	gr.libelle AS gradeAgent,
	gr.id_grade AS idGrade
	FROM agents ag
	JOIN zone_sante z ON ag.id_zs = z.id_zs
	JOIN grade gr ON ag.id_grade = gr.id_grade

	');
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
							<h4 class="text-blue h4">LISTE DES AGENTS</h4>
							<a class="btn btn-outline-primary" href="BO_form_cree_agent.php">Ajouter Agents</a>
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
									<th>Adresse</th>
									<th>Zone de santé</th>
									<th>Grade</th>
								
									<th>Acces</th>
														
								</tr>
							</thead>
							<tbody>
							<?php
                                while ( $ligne = $query->fetchObject() ) :
                            ?>
								<tr>
						
									<td class="table-plus"><?php echo $ligne->idAgent ?></td>
									<td><?php echo $ligne->nomAgent ?></td>
									<td><?php echo $ligne->postnomAgent ?></td>
									<td><?php echo $ligne->prenomAgent ?></td>
									<td><?php echo $ligne->adresseAgent ?></td>
									<td><?php echo $ligne->zoneAgent ?></td>
									<td><?php echo $ligne->gradeAgent ?></td>
								
									<td>
										<?php
											$query2 = $connexion->query("SELECT * FROM access_users where id_agent = $ligne->idAgent ");
											$ligne2 = $query2->fetchObject();
											if($ligne2){
												?>
														<img src="vendors/images/ok.png" alt="" width="35" height="35">
													</div>
											<?php
											}else{
												?>
												<div class="dropdown">
												<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
													<i class="dw dw-more"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
													<a class="dropdown-item" href="BO_form_cree_acces_agent.php?id_agent=<?php echo $ligne->idAgent ?>&amp;nom=<?php echo $ligne->nomAgent ?>&amp;postnom=<?php echo $ligne->postnomAgent ?>&amp;prenom=<?php echo $ligne->prenomAgent ?>&amp;adresse=<?php echo $ligne->adresseAgent ?>&amp;zone=<?php echo $ligne->zoneAgent ?>&amp;id_zone=<?php echo $ligne->idZone ?>&amp;grade=<?php echo $ligne->gradeAgent ?>&amp;grade=<?php echo $ligne->gradeAgent ?>&amp;grade=<?php echo $ligne->gradeAgent ?>&amp;id_grade=<?php echo $ligne->idGrade?>"><i class="dw dw-eye"></i>Donner Accès</a>
												<!--	<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
													<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
												-->
												</div>
											</div>
											<?php
											}
										?>
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