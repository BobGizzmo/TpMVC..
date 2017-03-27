<?php
namespace App;
?>
	<h1>Liste des Utilisateurs</h1>
<?php	
	isset($_GET["typeChoice"]) ?	$req=User::showUser($_GET["typeChoice"]) : $req=User::showUser();
	if(isset($_GET["id"])){
		User::deleteUser($_GET["id"]);
	}
?>	
	
	<table>
		<tr>
			<td><strong>Nom</strong></td>
			<td><strong>Prenom</strong></td>
			<td><strong>Naissance</strong></td>
			<td><strong>Adresse</strong></td>
			<td><strong>Tel</strong></td>
			<td><strong>CP</strong></td>
			<td><strong>Service</strong></td>
		</tr>
		<?php
		foreach ($req as $key => $value) {
			$value->getUsers($value);
		} ?>
	</table>
	<form action="index.php?p=addUser" method="GET">
		<input type="text" name="p" value="addUser" style="display:none"/>
		<button type="submit">Ajouter utlisateur</button>
	</form>	
	<form action="index.php?p=user" method="GET">
		<select name="typeChoice">
			<option value="1">Maintenance</option>
			<option value="2">Web Develloper</option>
			<option value="3">Web Designer</option>
			<option value="4">Réferenceur</option>
		</select>
		<input type="text" name="p" value="user" style="display:none"/>
		<button type="submit">Ok</button>
	</form>	