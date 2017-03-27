<?php
namespace App;

$req= User::showUser(2);
if(isset($_GET["organisme"])){
	User::formUser("credit");
}
?>
 	<h1>Liste des clients détaillée</h1>

 	<table>
		<tr>
			<td><strong>Nom</strong></td>
			<td><strong>Prenom</strong></td>
			<td><strong>Naissance</strong></td>
			<td><strong>Adresse</strong></td>
			<td><strong>Tel</strong></td>
			<td><strong>CP</strong></td>
			<td><strong>Statut</strong></td>
			<td><strong>Organisme de crédit</strong></td>
			<td><strong>somme</strong></td>
		</tr>
		<?php
		foreach ($req as $key => $value) {
			$value->getUsersDetails($value);
		} ?>
	</table>