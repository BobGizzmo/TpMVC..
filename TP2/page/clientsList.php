<?php
namespace App;

$req= User::showUser();
?>
 	<h1>Liste des clients</h1>

 	<table>
		<tr>
			<td><strong>Nom</strong></td>
			<td><strong>Prenom</strong></td>
		</tr>
		<?php
		foreach ($req as $key => $value) {
			$value->getUsers($value);
		} ?>
	</table>
	