<?php
namespace App;

if(isset($_GET["Adresse"])){
	User::formUser();
} ?>
 	<h1>Ajouter un Organisme de crédit</h1>

 	<form action="index.php?p=addClients" method="GET">
			<p><input type="text" name="organisme" placeholder="Nom de l'organisme"/>
			<input type="text" name="montant" placeholder="Montant"/>
			<input type="text" name="p" value="detailUser" style="display:none"/>
			<button type="submit">Ok</button></p>
		</form>	