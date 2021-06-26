<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="menu_gen.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-list3"></span><span class="mtext">Menu Generale</span>
						
						</a>
					</li>
					<li>
						<a href="prise_en_charge.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-list3"></span><span class="mtext">Information</span>
						
						</a>
					</li>


					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-chat3"></span><span class="mtext">Laboratoire</span>
						
						</a>
						<ul class="submenu">
                            <li><a href="enregistrement_DPS.php">Enregistrement</a></li>
							<li><a href="visualiser_attente_consting_pre_test.php"> Attente Consting pre-test</a></li>
							<li><a href="visualiser_a_prelevement_TDR.php">Liste TDR a prelever</a></li>
							<li><a href="visualiser_prelevement_TDR.php">Liste TDR prelever</a></li>
							<li><a href="visualiser_a_prelevement_electro.php">Liste El Hg a prelever</a></li>
							<li><a href="visualiser_prelevement_electro.php">Liste El Hg prelever</a></li>
							<li><a href="visualiser_transfere_TDR_Electro.php">Transfere TDR a El Hg</a></li>
							<li><a href="visualiser_enregistrement.php">Visualiser les enregistrements</a></li>
							<li><a href="visualiser_resultat.php">Visualiser les Resultats</a></li>
							<li><a href="visualiser_fiche_depistage.php">Fiches des Depistages</a></li>
							<li><a href="visualiser_rapport_DPS.php">Rapport Direction Provinciale</a></li>
							<li><a href="#">Rapport</a></li>
						
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Survep</span>
						</a>
						<ul class="submenu">
							<li><a href="basic-table.html">Survep1</a></li>
							<li><a href="datatable.html">Survep2</a></li>
						</ul>
					</li>
					<li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Calendrier des activités</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-apartment"></span><span class="mtext"> Recherche </span>
						</a>
						<ul class="submenu">
							<li><a href="#">Recherche1</a></li>
							<li><a href="#">Recherche2</a></li>
							<li><a href="#">Recherche3</a></li>
							
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-paint-brush"></span><span class="mtext">Therapeutique</span>
						</a>
						<ul class="submenu">
							<li><a href="#">Therapeutique1</a></li>
							<li><a href="#">Therapeutique2</a></li>
							<li><a href="#">Therapeutique3</a></li>
						
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-analytics-21"></span><span class="mtext">Graphique Statistique</span>
						</a>
						<ul class="submenu">
							<li><a href="highchart.html">Highchart</a></li>
							<li><a href="knob-chart.html">jQuery Knob</a></li>
							<li><a href="jvectormap.html">jvectormap</a></li>
							<li><a href="apexcharts.html">Apexcharts</a></li>
						</ul>
					</li>
					
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Plus</div>
					</li>
					<li>
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
						</a>
						<ul class="submenu">
							<li><a href="introduction.html">Introduction</a></li>
							<li><a href="getting-started.html">Leçon1 : Authentification et saisie de volontaite</a></li>
							<li><a href="color-settings.html">Leçon2 : Visualiser les volotaires et resttituer les resultats</a></li>
							<li><a href="third-party-plugins.html">Leçon3 : Rapports des depistages</a></li>
						</ul>
					</li>
					<?php if ($_SESSION['acces'] == 1) {?>
					<li>
						<a href="BO_list_acces_agent.php" target="_blank" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-paper-plane1"></span>
							<span class="mtext">Admintrateur <img src="vendors/images/coming-soon.png" alt="" width="25"></span>
						</a>
					</li>
					<?php }?>
					
				</ul>
			</div>
		</div>
	</div>