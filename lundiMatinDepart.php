<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>TP5</title>
        <!-- Lien vers mon CSS -->
        <link href="monStyle.css" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    
   </head>
   <body>
		<?php 
			// Remplissage des 8 tableaux avec les portions de phrases //
			$tabEx1[1]="Tôt dans la matinée,";
			$tabEx1[2]="Vers 4h du matin,";
			$tabEx1[3]="Hier soir,";
			$tabEx1[4]="Tard dans la nuit,";
			$tabEx1[5]="En pleine nuit,";
			
			$tabEx2[1]="alors que";
			$tabEx2[2]="pendant que";
			$tabEx2[3]="au moment où";
			$tabEx2[4]="tandis que";
			$tabEx2[5]="comme";
			$tabEx2[6]="cependant que";
			
			$tabEx3[1]="je dormais après avoir relu pour la 3eme fois le cours Management des SI,";
			$tabEx3[2]="je sommeillais en attendant de me lever pour mon jogging quotidien de 5h du matin,";
			$tabEx3[3]="je somnollais après avoir passé en revue le document sur le CSS,";
			$tabEx3[4]="je m'étais assoupi sur une des oeuvres passionnantes de Friedrich Wilheim Nietzsche,";
			$tabEx3[5]="je me reposais après avoir pratiqué 2h intenses de C++,";
			$tabEx3[6]="je m'étais endormis sur un article fort intéressant du 01 Informatique,";
			$tabEx3[7]="je faisais un somme après avoir fini de traduire Guerre &amp; Paix en japonais,";
			$tabEx3[8]="je m'étais assoupi sur la brillante émission 'Chasse et Pêche',"	;
			
			$tabEx4[1]="mon chat";
			$tabEx4[2]="mon chien";
			$tabEx4[3]="mon poisson rouge";
			$tabEx4[4]="mon perroquet";
			$tabEx4[5]="mon sanglier domestique";
			$tabEx4[6]="ma colocataire";
			$tabEx4[7]="mon hamster";
			
			$tabEx5[1]="a joué avec le fil électrique de";
			$tabEx5[2]="s'est pris les pates dans le fil électrique de";
			$tabEx5[3]="a appuyé par mégarde sur le bouton OFF de";
			$tabEx5[4]="a débranché";
			$tabEx5[5]="a renversé du soda sur";
			$tabEx5[6]="a fait tomber dans la baignoire";
			$tabEx5[7]="a rebooté";
			
			$tabEx6[1]="mon radio-réveil qui n'a donc pas sonné, et ce n'est";
			$tabEx6[2]="mon smartphone qui n'a donc pas sonné, et ce n'est";
			
			$tabEx7[1]="que lorsque les pompiers sont entrés en hurlant 'AU FEU !'";
			$tabEx7[2]="qu'au moment où les huissiers (venus pour le voisin) ont enfoncé la porte";
			$tabEx7[3]="qu'avec l'arrivée du SAMU, venu chercher le voisin d'en dessous";
			$tabEx7[4]="qu'après l'entrée fracassante de la SPA";
			$tabEx7[5]="qu'au moment où Spiderman a sonné à la porte";
			$tabEx7[6]="que quand le plombier est venu réparer l'inondation";
			$tabEx7[7]="qu'avec la visite d'un vendeur d'encyclopédies";
			
			
			$tabEx8[1]="que je me suis réveillé";
			$tabEx8[2]="que mon collocataire m'a reveillé";
			$tabEx8[3]="que j'ai réalisé qu'il était trop tard pour venir à l'IUT ce matin";
			$tabEx8[4]="que j'ai bondi hors de mon lit pour me ruer à l'IUT";
			
			// Génération d'un tableau général à deux dimensions contenant la totalité des textes //
			$tabExGen[1]=$tabEx1;
			$tabExGen[2]=$tabEx2;
			$tabExGen[3]=$tabEx3;
			$tabExGen[4]=$tabEx4;
			$tabExGen[5]=$tabEx5;
			$tabExGen[6]=$tabEx6;
			$tabExGen[7]=$tabEx7;
			$tabExGen[8]=$tabEx8;
			
			
		?>
		<div class="container-fluid">
		
			<div class="row cadre ">	 
				<div class="col-xs-12">
					<h1>Tous les lundis, une excuse différente ! </h1></br>
					
				</div>
				<div class="col-xs-12">
					<?php
					 
					$toutSet = true;
                    for ($i = 1; $i <= 8 ; $i++) {
                        $toutSet &= isset($_POST['var'.$i]);
                    }
				
					if($toutSet){
						$premier = 1;
							if (isset($_POST['var'.$premier]) && $_POST['var'.$premier] != ""){
								foreach($tabExGen as $table){
									echo $table[$_POST['var'.$premier]];
									echo " ";
									$premier += 1;
								}
								
							}
            			
						echo ".";
					}
					
					?>
				</div>
			</div>	
			<div class="row cadre ">
				<div class="col-xs-12">
					<form action="lundiMatinDepart.php" method="post">
						<?php
							$indice = 1;
							foreach($tabExGen as $table) {
								echo "<select name='var$indice'>";
								$indice2 =1;
								foreach($table as $contenu) {
									?>
									<option value='<?php echo $indice2 ?>' <?php if($toutSet && $table[$_POST['var'.$indice]] == $contenu) echo "selected";?>><?php echo $contenu;?></option>
									<?php
									$indice2 +=1;
								}
								echo "</select><br>";
								$indice +=1;
							}
						?>
						<input type="submit" value="Envoyer">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>