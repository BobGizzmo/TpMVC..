<?php

class Apple{

	public function getUsersDetails($key){
		echo "<tr>
				<td>$key->Nom</td>
				<td>$key->Prenom</td>
				<td>$key->Naissance</td>
				<td>$key->Adresse</td>
				<td>$key->Tel</td>
				<td>$key->CP</td>
				<td>$key->Statut</td>
				<td>$key->Organisme</td>
				<td>$key->Montants</td>
			</tr>";
	}

	public function getUsers($key){
			echo "<tr>
					<td>$key->Nom</td>
					<td>$key->Prenom</td>
				</tr>";
	}

}