<?php
	session_start();
	require('BDD/bdd.php');
	require_once("head.php");
	require_once("header.php");
	require_once("menu.php");

/*
$query = $connexion->query('
								SELECT * FROM 
								v.nom AS nomVolotaire,
								a.nom AS nomAgent,
								LEFT JOIN volontaire v ON e.id_v = v.id_v
								LEFT JOIN resultat r ON e.id_v = r.id_v
								JOIN agent a ON a.id_agent = e.id_agent');
*/

$query = $connexion->query('SELECT 
enr.date_enr AS dateEnre,
v.nom AS nomV,
v.postnom AS postnomV,
v.prenom AS prenomV,
v.sexe AS sexeV,
   d.libelle_dps AS dps,
zs.libelle AS zs,
air.libelle AS airSante,
v.num_tel AS numTel,
v.province AS provinceOrigine,
res.type_res AS resultat,
pre.preleveur AS preleveur,
v.num_avenue AS numAv,
v.avenue AS avenue,
v.quartier AS quartier,
v.comm_ville AS commune

FROM volontaire v
JOIN enregistrement enr ON v.id_v = enr.id_v
JOIN DPS d ON enr.id_dps = d.id_dps
JOIN zone_sante zs ON enr.id_zs = zs.id_zs
JOIN aire_sante air ON enr.id_air_sante = air.id_air_sante
JOIN resultat res ON enr.num_fiche = res.num_fiche
JOIN prelevement pre ON enr.num_fiche = pre.num_fiche
        ');
        
?>

			
				<!-- Bootstrap Select End -->
				

				<div class="mobile-menu-overlay"></div>
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
					<!-- Select-2 end -->
				<!-- Bootstrap Select Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">RAPPORT DE DEPISTAGES</h4>
							
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
									
									
									<th>Date de Prelevement</th>
									<th>Nom</th>
									<th>Genre</th>
									<th>Adresse</th>
									<th>DPS de la santé</th>
									<th>Zone de santé</th>
									<th>Aire de santé</th>
									<th>Num Tel</th>
									<th>Province d'origine</th>
									<th>Resultat</th>
									<th>Preleveur</th>
									<th>Agent de Labo</th>
							
								</tr>
							</thead>
							<tbody>
							<?php

                                while ( $ligne = $query->fetchObject() ) :
                            ?>

								<tr>
									<td class="table-plus"><?php echo $ligne->dateEnre ?></td>
									<td><?php echo $ligne->nomV .' '.$ligne->postnomV.' '.$ligne->prenomV ?></td>
									<td><?php echo $ligne->sexeV ?></td>
									<td><?php echo $ligne->numAv .' '.$ligne->avenue.' '.$ligne->quartier.' '.$ligne->commune  ?></td>
									<td><?php echo $ligne->dps ?></td>
									<td><?php echo $ligne->airSante ?></td>
									<td><?php echo $ligne->zs  ?></td>
									<td><?php echo $ligne->numTel ?></td>
									<td><?php echo $ligne->provinceOrigine ?></td>
									<td><?php echo $ligne->resultat?></td>
									<td><?php  echo $ligne->preleveur?></td>
									<td><?php  echo $ligne->preleveur?></td>
								
								
						
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
	<script src="vendors/scripts/datatable-setting.js"></script>
</body>
</html>
<?php
