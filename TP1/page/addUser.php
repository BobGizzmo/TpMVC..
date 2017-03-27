<?php
namespace App;

if(isset($_GET["Adresse"])){
	User::formUser();
} ?>
 	<h1>Ajouter un utilisateur</h1>

 	<form action="index.php?p=addUser" method="GET">
			<p><input type="text" name="Nom" placeholder="Nom"/>
			<input type="text" name="Prenom" placeholder="Prenom"/></p>
			<p><input type="date" name="Naissance" placeholder="Naissance"/>
			<input type="text" name="Adresse" placeholder="Adresse"/></p>
			<p><input type="text" name="Tel" placeholder="Telephone"/>
			<input type="text" name="CP" placeholder="Code Postal"/></p>
			<p><select name="nomServices">
				<option value="1">Maintenance</option>
				<option value="2">Web Develloper</option>
				<option value="3">Web Designer</option>
				<option value="4">Réferenceur</option>
			</select>
			<input type="text" name="p" value="addUser" style="display:none"/>
			<button type="submit">Ok</button></p>
		</form>