<?php
	session_start();
    require('BDD/bdd_count.php');
	//require('BDD/bdd.php');
	require_once("head.php");
	require_once("header.php");
	require_once("menu.php");

	
	$query = "SELECT
            res.id_v AS volont,
            res.type_res AS resulta,
            enr.id_air_sante AS air,
            ag.nom AS nomAgent,
            ag.id_zs AS idZone,
            zs.libelle AS zoneSante,
            zs.id_dps AS idDps,
            dp.libelle_dps AS Direction
            FROM enregistrement enr
            JOIN agents ag ON enr.id_agent = ag.id_agent
            JOIN resultat res ON enr.id_v = res.id_v
            JOIN zone_sante zs ON ag.id_zs = zs.id_zs
            JOIN DPS dp ON zs.id_dps = dp.id_dps
            WHERE res.type_res='SS' AND zs.id_dps='5'";


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
							<h4 class="text-blue h4">STATISTIQUES DES DIRECTIONS PROVINCIALES DE LA SANTE</h4>
							
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
									<th>Direction Provinciale de la santé</th>
									<th>Volontaires Enregistrers</th>
									<th>Nbrs Resultats</th>
									<th>Drepanocytaires</th>
									<th>Femmes Drepanocytaires</th>
									<th>Femmes Drepanocytaires GR</th>
								
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php

                            ?>

								<tr><td></td>
                                    <td><?php echo $ligne->Direction?></td>
                                    
									<td>
                                        <?php
                                            	if ($_SESSION['acces'] == 1){ 
                                                    
                                                    $query1 = mysqli_query($connection, $query);
                                                    $ligne = mysqli_num_rows($query1);
                                                    echo '<h2>' . $ligne . '</h2>';
                                                    }else{
                                                        $query = "SELECT
                                                        res.id_v AS volont,
                                                        res.type_res AS resulta,
                                                        enr.id_air_sante AS air
                                                        FROM enregistrement enr
                                                        JOIN resultat res ON enr.id_v = res.id_v
                                                        WHERE res.type_res='SS' AND enr.id_air_sante='$air'";
                                                        $query1 = mysqli_query($connection, $query);
                                                        $ligne = mysqli_num_rows($query1);
                                                        echo '<h2>' . $ligne . '</h2>';
                                                    }
                                        ?>
                                    </td>
							
							
								</tr>
							
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
