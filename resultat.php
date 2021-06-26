<?php
session_start();
require_once("head.php");
require_once("header.php");
require_once("menu.php");



?>
			
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>RESULTATS</h4>
							</div>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="profile-photo">
								
								<img src="vendors/images/user1.png" alt="" class="avatar-photo">
								
								<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<!-- La photo 
												<div class="modal-body pd-5">
												<div class="img-container">
													<img id="image" src="vendors/images/photo2.jpg" alt="Picture">
												</div>
											</div>-->
											<div class="modal-footer">
												<input type="submit" value="Update" class="btn btn-primary">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<h5 class="text-center h5 mb-0"><?php echo $_GET['nomV'] ?> <?php echo $_GET['postNV'] ?> <?php echo $_GET['prenomV'] ?></h5>
							<p class="text-center text-muted font-14"></p>
							<div class="profile-info">
								<h5 class="mb-20 h5 text-blue"></h5>
								<ul>
									<li>
										<span>Date de Naiss</span>
										<?php echo $_GET['dateV'] ?>
										
									</li>
									<li>
										<span>Numero telephone:</span>
									<?php echo	$_GET['numV']; ?>
									</li>
									<li>
										<span>Sexe</span>
										<?php echo	$_GET['sexeV']; ?>
									</li>
									<li>
										<span>Etat Civil</span>
										<?php echo	$_GET['etatCivil']; ?>
									</li>
									<li>
										<span>Address:</span>
										N° : <?php echo $_GET['numV'] ?>, Avenue : <?php echo $_GET['avenueV'] ?>/ Quartier : <?php echo $_GET['quartierV'] ?>/ Commune : <?php echo $_GET['communeV'] ?>/ Ville: <?php echo $_GET['villeV'] ?>/ Province : <?php echo $_GET['provinceV'] ?>,
									</li>
								</ul>
							</div>
						
							
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="card-box height-100-p overflow-hidden">
							<div class="profile-tab height-100-p">
								<div class="tab height-100-p">
									<ul class="nav nav-tabs customtab" role="tablist">
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#setting" role="tab">Clique Ici pour </a>
										</li>
									</ul>
									<div class="tab-content">
									
										<div class="tab-pane fade" id="tasks" role="tabpanel">
											<div class="pd-20 profile-task-wrap">
												<div class="container pd-0">
													<!-- Open Task start -->
													<div class="task-title row align-items-center">
														<div class="col-md-8 col-sm-12">
															<h5>Open Tasks (4 Left)</h5>
														</div>
														<div class="col-md-4 col-sm-12 text-right">
															<a href="task-add" data-toggle="modal" data-target="#task-add" class="bg-light-blue btn text-blue weight-500"><i class="ion-plus-round"></i> Add</a>
														</div>
													</div>
													
													<!-- Open Task End -->
													<!-- Close Task start -->
													
													
													<!-- Close Task start -->
													<!-- add task popup start -->
													
													<!-- add task popup End -->
												</div>
											</div>
										</div>
										<!-- Tasks Tab End -->
										<!-- Setting Tab start -->
										<div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
											<div class="profile-setting">
												<form action="resultat_action.php" method="post" autocomplete="off">
													<ul class="profile-edit-list row">
														<li class="weight-500 col-md-6">															
														
															<div class="form-group">
																<label>Resultats</label>
																	<div class="d-flex">
																	<div class="custom-control custom-radio mb-5 mr-20">
																		<input type="radio" id="customRadio4" name="test" class="custom-control-input" value="AA">
																		<label class="custom-control-label weight-400" for="customRadio4">AA</label>
																	</div>
																	<div class="custom-control custom-radio mb-5">
																		<input type="radio" id="customRadio5" name="test" class="custom-control-input" value="AS">
																		<label class="custom-control-label weight-400" for="customRadio5">AS</label>
																	</div>
																	<div class="custom-control custom-radio mb-5">
																		<input type="radio" id="customRadio6" name="test" class="custom-control-input" value="SS">
																		<label class="custom-control-label weight-400" for="customRadio6">SS</label>
																	</div>
																</div>
															</div>


															<div class="form-group">
																<label>Technique Utiliser</label>
																	<div class="d-flex">
																	<h6><?php echo $_GET['technique'] ?></h6>
															</div>
														
															<div class="form-group">
																<label>Observation</label>
																<input type="hidden" name="technique" value="<?php echo $_GET['technique'] ?>">
																<textarea class="form-control" name="observation"></textarea>
																<input type="hidden" value="<?php echo $_GET['num_fiche'] ?>" name="num_fiche">
															</div>
															<div class="form-group mb-0">
																<input type="submit" class="btn btn-primary" value="Enregistrer">
															</div>
														</li>
													</ul>
												</form>
											</div>
										</div>
										<!-- Setting Tab End -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/cropperjs/dist/cropper.js"></script>
	<script>
		window.addEventListener('DOMContentLoaded', function () {
			var image = document.getElementById('image');
			var cropBoxData;
			var canvasData;
			var cropper;

			$('#modal').on('shown.bs.modal', function () {
				cropper = new Cropper(image, {
					autoCropArea: 0.5,
					dragMode: 'move',
					aspectRatio: 3 / 3,
					restore: false,
					guides: false,
					center: false,
					highlight: false,
					cropBoxMovable: false,
					cropBoxResizable: false,
					toggleDragModeOnDblclick: false,
					ready: function () {
						cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
					}
				});
			}).on('hidden.bs.modal', function () {
				cropBoxData = cropper.getCropBoxData();
				canvasData = cropper.getCanvasData();
				cropper.destroy();
			});
		});
	</script>
</body>
</html>