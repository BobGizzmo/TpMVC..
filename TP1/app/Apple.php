<?php

class Apple{

	public function getUsers($key){
		echo "<tr>
				<td>$key->Nom</td>
				<td>$key->Prenom</td>
				<td>$key->Naissance</td>
				<td>$key->Adresse</td>
				<td>$key->Tel</td>
				<td>$key->CP</td>
				<td>$key->NomService</td>
				<form action='index.php?p=user' method='GET'>
					<td><button name='id' value='".$key->id."'>supprimer</button>
					<input type='text' name='p' value='user' style='display:none'/>
				</form>	
			</tr>";
	}

}