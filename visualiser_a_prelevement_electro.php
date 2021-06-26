<?php
session_start();
	require('BDD/bdd.php');
	require_once("head.php");
	require_once("header.php");
	require_once("menu.php");	
	$query = $connexion->query("SELECT * FROM consting_pre_test WHERE technique='electrophorese'");
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
							<h4 class="text-blue h4">PRELEVEMENT ELECTROPHORESE D'HEMOGLOBINE</h4>
							
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
									<th>Consultat</th>
									<th>Date consultation</th>
									<th>Action</th>
								
							
							</thead>
							<tbody>
							<?php
                                while ( $ligne = $query->fetchObject() ) :
                            ?>  
                         
									<td class="table-plus"><?php echo $ligne->id_pre_test ?></td>
									<td><?php echo $ligne->num_fiche ?></td>
									<td><?php echo $ligne->technique ?></td>
									<td><?php echo $ligne->consultat ?></td>
									<td><?php echo $ligne->date_cons ?></td>
									<td>
										<?php
											$query2 = $connexion->query("SELECT * FROM prelevement WHERE num_fiche='$ligne->num_fiche'");
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
													<a class="dropdown-item" href="form_prelevement.php?num_fiche=<?php echo $ligne->num_fiche ?>&amp;technique=<?php echo $ligne->technique ?>"><i class="dw dw-eye"></i>Prelevement</a>
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
