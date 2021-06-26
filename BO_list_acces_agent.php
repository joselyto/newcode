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
	ag.adresse AS adresse,
	ac.password AS passwordAgent,
	z.libelle AS libelleZone,
	gr.libelle AS libelleGrade,
    tu.libelle AS libelleType,
    air.libelle AS libelleAir
    
	FROM agents ag
	JOIN access_users ac ON ag.id_agent = ac.id_agent
	JOIN type_users tu ON ac.id_type = tu.id_type
	JOIN zone_sante z ON ag.id_zs = z.id_zs
	JOIN grade gr ON ag.id_grade = gr.id_grade
    JOIN aire_sante air ON ac.id_air_sante = air.id_air_sante
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
							<h4 class="text-blue h4">Agents ayant accès a l'application</h4>
							
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
									<th>Grade</th>
                                    <th>Type d'acces</th>
                                    <th>Zone de sante</th>
									<th>Aire de santé</th>
									<th>Mot de passe</th>
                                   
                                   
								</tr>
							</thead>
							<tbody>
							<?php

                                while ( $ligne = $query->fetchObject() ) :
                            ?>

								<tr>
									<td><?php echo $ligne->idAgent ?></td>
									<td><?php echo $ligne->nomAgent ?></td>
									<td><?php echo $ligne->postnomAgent ?></td>
									<td><?php echo $ligne->prenomAgent ?></td>
									<td><?php echo $ligne->adresse ?></td>
									<td><?php echo $ligne->libelleGrade ?></td>
									<td><?php echo $ligne->libelleType ?></td>
                                    <td><?php echo $ligne->libelleZone ?></td>
									<td><?php echo $ligne->libelleAir ?></td>
									<td><?php echo $ligne->passwordAgent ?></td>
                                    
								
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