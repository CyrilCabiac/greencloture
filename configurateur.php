<?php
/*
Template Name: configurateur

*/

get_header();
?>

<div class="container-fluid configurateur">
	<div class="row configurateur_inner">
		<div class="col-md-12">

			<form id="msform">
				<!-- progressbar -->
				<ul id="progressbar">
					<li class="active">Bienvenue</li>
					<li>Gamme</li>
					<li>Dimensions</li>
					<li>Couleurs</li>
					<li>Type de pose</li>
					<li>Options</li>
					<li>Expédition</li>
					<li>Récapitulatif</li>
				</ul>

				<fieldset id="step1_bienvenue">
					<div class="bienvenue_wrapper">
						<div class="row bienvenue_mobile">
							<div class="col-md-4 col-xs-12"></div>
							<div class="col-md-4 col-xs-12">
								<div class="logo_wrapper"><img src="https://greencloture.fr/wp-content/themes/urna-child/assets_configurateur/images/logo.png" /></div>
							</div>
							<div class="col-md-4 col-xs-12"></div>
						</div>

						<div class="spacer-v80"></div>
						<h1 class="titre">Configurateur de clôture<br> avec panneaux rigides</h1>
					</div>

					<input type="button" name="next" class="next action-button debuter" value="Débuter la configuration" />
				</fieldset>

				<fieldset id="step2_gamme">
					<h2 class="fs-title">Choix de la gamme </h2>
					<h3 class="fs-subtitle">Déterminer quel type de panneaux rigides composera votre clôture</h3>

					<div class="col-md-4 col-xs-12">
						<label>
							<input type="radio" name="gamme" value="Eco">
							<img src="https://greencloture.fr/wp-content/themes/urna-child/assets_configurateur/images/gamme/eco.jpg">
						</label>
					</div>

					<div class="col-md-4 col-xs-12">
						<label>
							<input type="radio" name="gamme" value="Medium">
							<img src="https://greencloture.fr/wp-content/themes/urna-child/assets_configurateur/images/gamme/medium.jpg">
						</label>
					</div>

					<div class="col-md-4 col-xs-12">
						<label>
							<input type="radio" name="gamme" value="Plus">
							<img src="https://greencloture.fr/wp-content/themes/urna-child/assets_configurateur/images/gamme/pro.jpg">
						</label>
					</div>
					
					
					
					<a class="btn next action-button gammesuivant" style="display:none">Suivant</a>
				</fieldset>

				<fieldset id="step3_dimensions">

					<div class="row dimensions">
						<div class="col-md-3 col-xs-12">
							<div class="dimensions_wrapper">

								<h2 style="color:white" class="fs-title">Dimensions de votre clôture</h2>
								<h3 style="color:white" class="fs-subtitle">Vous déterminez ici la hauteur au sol fini ainsi que la longueur totale de votre clôture</h3>

								<div class="select_longueur">
									<span class="etape">1.&nbsp;</span>
									<label style="color:white" for="">Longueur totale à clôturer (en m)</label>

									<input type="number" id="longueur" name="longueur" class="form-control" placeholder="0.00m" value="" aria-describedby="basic-addon2" min="2" max="10000" required>
									
									<script>
											
										
									</script>
									
									
								</div>

								<div class="select_hauteur">
									<span class="etape">2.&nbsp;</span>
									<label style="color:white" for="">Hauteur totale de la clôture (sol fini)</label>
									<select id="hauteur" name="hauteur" class="">
										<option>Choix de la hauteur</option>
										<option value="0m63">0.63m</option>
										<option value="0m83">0.83m</option>
										<option value="1m03">1.03m</option>
										<option value="1m23">1.23m</option>
										<option value="1m53">1.53m</option>
										<option value="1m73">1.73m</option>
										<option value="1m93">1.93m</option>
										<option value="2m03">2.03m</option>
										<option value="2m23">2.23m</option>
										<option value="2m43">2.43m</option>
									</select>
								</div>

							</div>
						</div>

						<div class="col-md-9 col-xs-12">
							<img class="dim_mobile" src="https://greencloture.fr/wp-content/themes/urna-child/assets_configurateur/images/dimensions/dim7.jpeg" />
						</div>

					</div>
					<!--Fin Row-->

					<div class="row">
						<div class="col-md-12">
							<div class="elements_cloture">
								<h3 class="titre_element">Votre clôture sera composée de</h3>
								<div class="element_wrapper">
									<div class="cadre"><img class="element" src="https://greencloture.fr/wp-content/themes/urna-child/assets_configurateur/images/nb/panneaux.png" /><span id="output_NbDePanneaux">0</span><span class="elements_output">panneaux rigides</span></div>
									<div class="cadre"><img class="element" src="https://greencloture.fr/wp-content/themes/urna-child/assets_configurateur/images/nb/poteaux.png" /><span id="output_NbDePoteaux">0</span><span class="elements_output">poteaux</span></div>
								</div>
							</div>

						</div>
					</div>

					<a class="btn previous action-button">Précédent</a>
					<a class="btn next action-button">Suivant</a>
				</fieldset>

				<fieldset id="step4_couleurs">

					<div style="height:90%" class="row">
						<div class="col-md-3">
							<div class="choix_des_couleurs">
								<div class="spacer-v50 hidden_mobile"></div>
								<h2 class="fs-title">Couleur de votre clôture</h2>
								<h3 class="fs-subtitle">Ce choix détermine la couleur de vos panneaux rigides, poteaux, platines (si spécifié) et kit d'occultation (si besoin). </h3>
								<div class="spacer-v50 hidden_mobile"></div>
								<select id="couleurs" name="couleur">
									<option>Choix de la couleur</option>
									<option value="couleurral6005" selected>Vert 6005</option>
									<option value="couleurral7016">Gris 7016</option>
									<option value="couleurral9005">Noir 9005</option>
								</select>
							</div>
						</div>
						<div class="col-md-9 outpout_couleurs">
							
							<img class="couleurral6005 box" src="https://greencloture.fr/wp-content/themes/urna-child/assets_configurateur/images/couleurs/6005-min.png"/>
							<img class="couleurral7016 box" src="https://greencloture.fr/wp-content/themes/urna-child/assets_configurateur/images/couleurs/7016-min.png"/>
							<img class="couleurral9005 box" src="https://greencloture.fr/wp-content/themes/urna-child/assets_configurateur/images/couleurs/9005-min.png"/>
							<!--
							<div class="couleurral6005 box"></div>
							<div class="couleurral7016 box"></div>
							<div class="couleurral9005 box"></div>-->
						</div>
					</div>

					<a class="btn previous action-button">Précédent</a>
					<a class="btn next action-button">Suivant</a>
				</fieldset>

				<fieldset id="step5_typeDePose">

					<div class="row">
						<div class="col-md-3 param_pose">
							<h2 style="color:#264653" class="fs-title">Type de pose</h2>
							<h3 class="fs-subtitle hidden_mobile">Déterminez comment vous allez poser votre clôture </h3>

							<span class="etapepose">1.</span>
							<label class="my-1 mr-2" for="">&nbsp;Choisissez le type de pose souhaité.</label>
							<p class="hidden_mobile">(La pose par scellement induit une augmentation de la hauteur de vos poteaux de + 500mm) </p>
							<select id="pose" name="pose">
								<option value="">Choix</option>
								<option value="sceller">A sceller</option>
								<option value="platine">Sur platine</option>
							</select>

							<div class="wrapper">
								<div class="stripe-wrapper">
									<span class="etapepose">2.</span>
									<label class="my-1 mr-2" for="">&nbsp;Nombre d'angles</label>
									<p class="hidden_mobile">Votre clôture dispose-t-elle d'angle(s).</p>
									<div id="quantity">
										<input id="angles" name="angles" type="number" min="0" max="10" step="1" value="0">
										<div class="quantity-nav">
											<div class="quantity-button quantity-up"></div>
											<div class="quantity-button quantity-down"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-9 output_pose">
							
							<img src="https://greencloture.fr/wp-content/themes/urna-child/assets_configurateur/images/pose/ascellerpng-min.png" class="sceller box"/>
							<img src="https://greencloture.fr/wp-content/themes/urna-child/assets_configurateur/images/pose/platinepng-min.png" class="platine box"/>
							
							
							<!--<div class="sceller box"></div>
							<div class="platine box"></div>-->
						</div>

					</div>
					<!--Fin Row-->

					

					
					

					<a class="btn previous action-button">Précédent</a>
					<a class="btn next action-button">Suivant</a>
				</fieldset>

				<fieldset id="step6_options">

					<div class="row options">

						<div class="col-md-3 param_options">
							<h2 style="color:#264653" class="fs-title">Options supplémentaires</h2>
							<h3 class="fs-subtitle hidden_mobile">Agrémentez votre clôture avec des options non obligatoires. </h3>

							<span class="etapepose">1.</span>
							<label class="my-1 mr-2" for="occultation">&nbsp;Occultez votre clôture avec notre kit de lames en PVC</label>
							<p class="hidden_mobile">La hauteur du kit d'occultation correspondra à la hauteur au sol fini précédemment saisie.</p>

							<select id="occultation" name="occultation">
								<option value="oui">Oui</option>
								<option value="non" selected>Non</option>
							</select>
							<div id="view_soubassement">
								<div class="spacer-v50 hidden_mobile"></div>
								<span class="etapepose">2.</span>
								<label class="my-1 mr-2" for="soubassement">&nbsp;Ajoutez des plaques de soubassement en béton</label>
								<p class="hidden_mobile">Deux hauteurs sont disponibles. En fonction de votre choix, la hauteur des panneaux et du kit d'occultation sera automatiquement ajustée. </p>

								<select id="soubassement" name="soubassement">
									<option value="" selected>Non</option>
									<option value="s25cm">25cm</option>
									<option value="s50cm">50cm</option>
								</select>
							</div>
						</div>

						<div class="col-md-9 output_pose">
							<div class="oui box"></div>
							<div class="non box"></div>
							<div class="s25cm box2"></div>
							<div class="s50cm box2"></div>
						</div>

					</div>
					<!--Fin row-->

					<div class="spacer-v80mobile"></div>
				
					<div class="spacer-v580"></div>

					<a class="btn previous action-button">Précédent</a>
					<a class="btn next action-button">Suivant</a>
				</fieldset>
				
				
				<fieldset id="step6-5_expedition">
					<h2 class="fs-title">Expédition</h2>
					<h3 class="fs-subtitle">Déterminer comment sera livrée votre commande. </h3>

					<div id="radio_Premium" class="col-md-4 col-xs-12">
						<label>
							<input type="radio" name="livraison" value="Premium">
							<img src="https://greencloture.fr/wp-content/themes/urna-child/assets_configurateur/images/expedition/premium.jpeg">
							<p>+ 225€ | Gratuit pour toute commande supérieure à 5000€</p>
							
						</label>
					</div>

					<div id="radio_Classique" class="col-md-4 col-xs-12">
						<label>
							<input type="radio" name="livraison" value="Classique">
							<img src="https://greencloture.fr/wp-content/themes/urna-child/assets_configurateur/images/expedition/classique-min.jpeg">
							<p>+ 162€ | Gratuit pour toute commande supérieure à 2000€</p>
							
						</label>
					</div>

					<div id="radio_Messagerie" class="col-md-4 col-xs-12">
						<label>
							<input type="radio" name="livraison" value="Messagerie">
							<img src="https://greencloture.fr/wp-content/themes/urna-child/assets_configurateur/images/expedition/messagerie.jpeg">
							<p>Pour toute commande inférieure à 200kg | Forfait France métropolitaine de 90€</p>
							
						</label>
					</div>
					
					<a class="btn previous action-button">Précédent</a>
					<a class="btn next action-button">Suivant</a>
					
				</fieldset>
				
				
				<fieldset id="step7_recap">

					<h2 style="color:white" class="fs-title">Récapitulatif de votre clôture</h2>

					<div class="spacer-v80 hidden_mobile"></div>

					<div class="row">

						<div class="col-md-8">

							<table style="width:100%" class="tg">
								<thead>
									<tr>
										<th style="width:50% !important" class="tg-roi2">Produit</th>
										<th style="width:20% !important" class="tg-roi2">Prix</th>
										<th style="width:10% !important" class="tg-roi2">Quantité</th>
										<th style="width:10% !important" class="tg-roi2">Total</th>
									</tr>
								</thead>
								<tbody id="recaplignes"></tbody>
								<tfoot>
									<tr class="ligne">
										<td style="text-align:right;font-weight:700" class="tg-9wq8" colspan="3">Livraison <span id="type_livraison"></span></td>
										<td class="tg-9wq8" id="recap_livraison">0.00€</td>
									</tr>
									<tr class="ligne">
										<td style="text-align:right;font-weight:700" class="tg-9wq8" colspan="3">TOTAL</td>
										<td class="tg-9wq8 le_total" id="recap_total">534.90€</td>
									</tr>
								</tfoot>
							</table>
						</div>

						<div class="col-md-4 recap_actions">
							<div class="hidden_mobile"><h2 style="color:black">Que souhaitez-vous faire de votre configuration?</h2></div>
							
							<div style="height:30px" class="hidden_mobile"></div>
							
							<div class="action_mobile">
							<a style="margin-bottom:30px" href="#myModal" class="action_configurateur devis" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;Devis par email</a>
							<a href="#" id="addToCart" class="action_configurateur panier"><i class="glyphicon glyphicon-shopping-cart"></i>&nbsp;Ajouter au panier</a>
							</div>
						</div>

					</div>

					<div class="spacer-v80 hidden_mobile"></div>

					<a class="btn previous action-button">Précédent</a>
				</fieldset>

			</form>

			<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-xl" role="document">
					<div id="idee" class="modal-content formulaire">
						<div class="modal-header">
							<h3 class="modal-title" id="exampleModalCenterTitle">Veuillez renseigner les champs ci-dessous. Celles-ci sont obligatoires pour l'établissement de votre devis. </h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">

							<div class="col-md-12">
								<h4 class="mb-3">Informations personnelles</h4>
								<form id="customer_data" class="needs-validation" novalidate>
									<div class="row">

										<div class="col-md-6">
											<label for="firstName">Votre nom</label>
											<input class="formulaire form-control" name="nom" type="text" value="" required>
										</div>

										<div class="col-md-6">
											<label for="lastName">Votre Prénom</label>
											<input class="formulaire form-control" type="text" name="prenom" value="" required>
										</div>
									</div>

									<div class="col-md-6">
										<label for="email">Email</label>
										<input class="formulaire form-control" type="email" name="email" required>
									</div>

									<div class="col-md-6">
										<label for="tel">Téléphone</label>
										<input class="formulaire form-control" type="tel" name="telephone" required>
									</div>

									<div class="mb-3">
										<label for="address">Votre Adresse</label>
										<input class="formulaire form-control" type="text" name="adresse" required>
									</div>

									<div class="row">
										<div class="col-md-6">
											<label for="zip">Code Postal</label>
											<input class="formulaire form-control" type="text" name="code_postal" required>
										</div>
										<div class="col-md-6">
											<label for="zip">Ville</label>
											<input class="formulaire form-control" type="text" name="ville" required>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
							<button id="send_quote" type="button" class="btn btn-primary">Envoyer devis</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal -->
		</div>
	</div>
</div>

<script src='https://greencloture.fr/wp-content/themes/urna-child/assets_configurateur/script.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
<?php
// get_footer();
?>
