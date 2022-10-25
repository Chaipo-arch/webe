<!DOCTYPE html>
<html lang="fr">
  <head>
		<meta charset="utf-8">
		<title>MEDILOG - Recherche médicament</title>
		
		<!-- Lien vers mon CSS -->
		<link href="../css/monStyle.css" rel="stylesheet">
   </head>

  <body>
	<table class="entete largeur100">
		<tr>
			<!--- Ligne d'Entete -->
			<td class="largeurColonne20 sansCadre texteCentre">
				<!--- Colonne Logo -->
					<a href="../index.html" ><img src="../images/medicaments2.jpg" id="imageHaut"/></a>
			</td>
			<td class="sansCadre texteCentre">
				<!--- Colonne Titre -->
				<h1>APPLICATION<br/>MEDILOG</h1>
			</td>
		</tr>

		<tr>
			<!--- Ligne Présentation -->
			<td colspan=2 class="largeur100 texteCentre" >
				<!--- Colonne Présentation -->
					<h2>
						-- Recherche d'un médicament --
					</h2>
			</td>
		</tr>
	</table>
	
	<table class="largeur100 contenu"> <!--- Table contenant le mode d'emploi et les images-->
		<tr>
			<!--- Ligne Formulaire de recherche -->
			<td class="largeur100">
				<h1>Recherche</h1>
				<form method="post" action="#" ID="formRecherche">
					<h2>
						
						Désignation à rechercher : <input name="Designation" id="Designation" placeholder="Tapez un mot à rechercher"> <br/>
						Type de médicament : 
						<?php
						try{
							$nomficTypes = "../fichier/TypesMedicaments.csv" ;
							if ( !file_exists($nomficTypes) ) {
							throw new Exception('Fichier '.$nomficTypes.' non trouvé.');
						}
						$tabTypes = file($nomficTypes,FILE_IGNORE_NEW_LINES);
						echo "<select name='medicament'>";
						foreach($tabTypes as $table) {
							
							echo'<option value='.$table.' > '.$table.'</option>' ;
						}
						} catch ( Exception $e ) {
						// Affichage message d'erreur
						}?>
						Laboratoire : 
						<select ID="Labo">
						<?php
						try{
							$nomficTypes = "../fichier/Laboratoires.csv" ;
							if ( !file_exists($nomficTypes) ) {
							throw new Exception('Fichier '.$nomficTypes.' non trouvé.');
						}
						$tabTypes = file($nomficTypes,FILE_IGNORE_NEW_LINES);
						echo "<select name='var'>";
						foreach($tabTypes as $table) {
							echo'<option value='.$table.' > '.$table.'</option>' ;
						}
						} catch ( Exception $e ) {
						// Affichage message d'erreur
						}?>
						</select><br/>
						<input type="submit"></input>
					</h2>												
				</form>
			</td>				
		</tr>
	</table>
	<table class="largeur100 contenu">
		<tr>
			<!--- Ligne Résultat de la recherche -->
			<td>
				<table class="largeur100">
					<tr>
						<?php

						?>
						<td class="largeurColonne50"><h1>Désignation</h1></td>
						<td class="largeurColonne25"><h1>Présentation</h1></td>
						<td class="largeurColonne25"><h1>Laboratoire</h1></td>
					</tr>
					<tr>
						<td class="largeurColonne50"><h2>Aspirine 500mg</h2></td>
						<td class="largeurColonne25"><h2>Effervescent</h2></td>
						<td class="largeurColonne25"><h2>UPSA</h2></td>
					</tr>
					<tr>
						<td class="largeurColonne50"><h2>Aspirine 1000mg</h2></td>
						<td class="largeurColonne25"><h2>Comprimé</h2></td>
						<td class="largeurColonne25"><h2>MERK</h2></td>
					</tr>
					<tr>
						<td class="largeurColonne50"><h2>Doliprane 1000mg</h2></td>
						<td class="largeurColonne25"><h2>Comprimé</h2></td>
						<td class="largeurColonne25"><h2>SANDOZ</h2></td>
					</tr>
				</table>
			</td>			
		</tr>		
	</table>
	
	<table class="largeur100 basDePage">   <!--- Table contenant le menu et le logo de l'iut-->
		<tr>
			<!--- Ligne Menu Bas -->
			<td class="largeurColonne80 texteCentre">
				<!--- Menu Bas -->
					<div class="texte">
						Menu : 
						<a href="../index.html" >Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="recherche.html">Recherche d'un médicament</a>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="ordonnance.html">Création ordonnance</a>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
			</td>
			<td class="texteCentre">
				<!--- Logo et lien IUT -->
				<div class="texte">
					<br/>Réalisé par <br/><a href="http://www.iut-rodez.fr" target="_blank"><img src="../images/LogoIut.png" alt="Logo IUT Rodez" ID="logoIUT"/></a><br/><br/>
				</div>
			</td>				
		</tr>
	</table>

  </body>
</html>