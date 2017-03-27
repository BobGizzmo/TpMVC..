<?php
namespace App;

if(isset($_GET["Adresse"])){
	User::formUser();
} ?>
 	<h1>Ajouter un client</h1>

 	<form action="index.php?p=addClients" method="GET">
			<p><input type="text" name="Nom" placeholder="Nom"/>
			<input type="text" name="Prenom" placeholder="Prenom"/></p>
			<p><input type="date" name="Naissance" placeholder="Naissance"/>
			<input type="text" name="Adresse" placeholder="Adresse"/></p>
			<p><input type="text" name="Tel" placeholder="Telephone"/>
			<input type="text" name="CP" placeholder="Code Postal"/></p>
			<p><select name="Statut">
				<option value="1">Célibataire</option>
				<option value="2">Concubinage</option>
				<option value="3">Divorcé</option>
				<option value="4">Marié</option>
				<option value="4">Veuf</option>
			</select>
			<select name="organisme">
				<option value="1">plouc</option>
				<option value="2">Laposte</option>
			</select></p>
			<input type="text" name="p" value="newUser" style="display:none"/>
			<button type="submit">Ok</button></p>
		</form>	