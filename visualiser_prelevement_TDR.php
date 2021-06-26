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
    v.num_tel AS numV,
    v.sexe AS sexeV,
    v.enceinte AS grosseV,
    v.date_naiss AS dateV,
    v.etat_civil AS etatCivil,
    v.num_avenue AS numAv,
    v.avenue AS avenueV,
    v.quartier AS quartierV,
    v.comm_ville AS communeV,
    v.ville AS villeV,
    v.province AS provinceV,
    pr.num_fiche AS num_fiche,
    pr.technique AS technique,
    pr.num_echa AS numEch,
    pr.qte_prelev AS qtePr,
    pr.date_prelev AS dateP,
    pr.id_prelev AS idP
FROM volontaire v
JOIN enregistrement enr ON v.id_v = enr.id_v
JOIN prelevement pr ON enr.num_fiche = pr.num_fiche
WHERE technique='TDR'");
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
							<h4 class="text-blue h4">DONNER RESULTATS</h4>
							
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
									<th>technique</th>
									<th>numero ech</th>
                                    <th>Qte Prele</th>
									<th>Date Prelevement</th>
									<th>Action</th>
								
							
							</thead>
							<tbody>
							<?php
                                while ( $ligne = $query->fetchObject() ) :
                            ?>  
                         
									<td class="table-plus"><?php echo $ligne->idP ?></td>
									<td><?php echo $ligne->num_fiche ?></td>
									<td><?php echo $ligne->technique ?></td>
									<td><?php echo $ligne->numEch ?></td>
									<td><?php echo $ligne->qtePr ?></td>
                                    <td><?php echo $ligne->dateP ?></td>
									<td>
										<?php
											$query2 = $connexion->query("SELECT * FROM resultat WHERE num_fiche = '$ligne->num_fiche'");
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
													<a class="dropdown-item" href="resultat.php?num_fiche=<?php echo $ligne->num_fiche ?>&amp;technique=<?php echo $ligne->technique ?>&amp;nomV=<?php echo $ligne->nomV ?>&amp;postNV=<?php echo $ligne->postNV ?>&amp;prenomV=<?php echo $ligne->prenomV ?>&amp;numV=<?php echo $ligne->numV ?>&amp;sexeV=<?php echo $ligne->sexeV ?>&amp;grosseV=<?php echo $ligne->grosseV ?>&amp;dateV=<?php echo $ligne->dateV ?>&amp;etatCivil=<?php echo $ligne->etatCivil ?>&amp;numAv=<?php echo $ligne->numAv ?>&amp;avenueV=<?php echo $ligne->avenueV ?>&amp;quartierV=<?php echo $ligne->quartierV ?>&amp;communeV=<?php echo $ligne->communeV ?>&amp;villeV=<?php echo $ligne->villeV ?>&amp;provinceV=<?php echo $ligne->provinceV ?>&amp;numEch=<?php echo $ligne->numEch ?>&amp;qtePr=<?php echo $ligne->qtePr ?>&amp;dateP=<?php echo $ligne->dateP ?>&amp;idP=<?php echo $ligne->idP ?>"><i class="dw dw-eye"></i>Resultat</a>
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
<?php
