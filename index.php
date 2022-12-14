<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Yatra+One&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="./business_logic.js"></script>
		<script
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
			defer
		></script>

		<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
	</head>
	
	<body>
		<div class="header border">	
				<img class="logo" src="uqtr.png" width="400px" height="auto">
				<span class="titre"> Loisirs pour les étudiants! </span>
		</div>
		<div class="content">
			<div class="menu">
				<ul class="list border">
					<li class="menu-row"><p class="menu-item">Acceuil</p></li>
					<li class="menu-row"><p class="menu-item">S'inscrire</p></li>
					<li class="menu-row"><p class="menu-item">Localiser une activité</p></li>
					<li class="menu-row"><p class="menu-item">Authentication</p></li>
				</ul>
			</div>
			<div class="body border">
				<div class="acceuil">
					<span class="entete">Notre but:</span>
					<p>Notre site propose aux étudiants désireux de réaliser une ou plusieurs activités de loisir de rejoindre les différentes activités proposées dans la liste suivantes en 3 étapes</p>
					<ul>
						<li>S'inscrire</li>
						<li>Choisir une ou plusieurs activités</li>
						<li>Commencer les activités en groupe</li>
					</ul>
					<p>Les différences activités des groupes sont la responsabilité des professionnelles. Il s'agit de passionnés de domaine qui vous feront découvrir des pans inédits de vos loisirs préfèrés. Qu'attendez-vous...?. Rejoignez-nous!</p>
					<span class="entete">Liste des activités disponibles:</span>
					<div class="grid">
						<span class="border highlighted">#</span>
						<span class="border highlighted">Activité</span>
						<span class="border highlighted">Responsable</span>
						<span class="border highlighted">Nombre d'inscrits</span>
						<span class="border">1</span>
						<span class="border">Natation</span>
						<span class="border">Michel Provencher</span>
						<span class="border">7</span>
						<span class="border">2</span>
						<span class="border">Football</span>
						<span class="border">Guillaume Dupont</span>
						<span class="border">20</span>
						<span class="border">3</span>
						<span class="border">Tennis</span>
						<span class="border">Ahmed Diakité</span>
						<span class="border">3</span>
					</div>
				</div>
				<div class="inscription">
					<span class="entete">Inscrivez-vous:</span>
					<form name="inscriptionForm" onsubmit="return authenticate()">
						<div class="inscription-grid">
							<label for="fname">Nom</label>
							<input type="text" id="fname" name="fname" value="" required>
							<label for="lname">Prénom</label>
							<input type="text" id="lname" name="lname" value="" required>
							<label for="fbirthday">Date de naissance</label>
							<input type="date" id="fbirthday" name="fbirthday" value="">
							<label for="sexe">Sexe</label>
							<div class="sexOptions">
								<input type="radio" id="male" name="sexe" value="homme">
								<label for="male">Homme</label>
								<input type="radio" id="female" name="sexe" value="homme">
								<label for="female">Femme</label>
							</div>
							<label for="activity">Activité</label>
							<select name="activity" id="activity">
								<option value="natation">Natation</option>
								<option value="football">Football</option>
								<option value="tennis">Tennis</option>
							</select>
							<label for="motivation">Motivations</label>
							<textarea id="motivation" name="motivation"></textarea>
						</div>
						<input type="reset" value="Réinitialiser">
						<input type="submit" value="Valider">
				  	</form> 
				</div>
				<div class="carte">
					<span class="entete">Carte:</span>
					<div id="map"></div>
				</div>
				<div class="authentication">
					<span class="entete">Connexion:</span>
					<p>Veuillez renseigner vos identifiants pour vous connecter.</p>
					<form name="authenticationForm" onsubmit="return authenticate(htmlentities($_GET['fusername']), htmlentities($_GET['fpassword']))">
						<div class="inscription-grid">
							<label for="fusername">Identifiant</label>
							<input type="text" id="fusername" name="fusername" value="" required>
							<label for="fpassword">Mot de passe</label>
							<input type="password" id="fpassword" name="fpassword" value="" required>
							<span>Basculer la visibilité du mot de passe</span>
							<input type="checkbox" onclick="toggleVisibility()">
						</div>
						<input type="submit" value="Connexion">
				  	</form> 
				</div>
			</div>
		</div>
	</body>

</html>