<?php
namespace App;

Class User{
	private $nom, $prenom, $naissance, $adresse, $tel, $cp, $service;
	private static $usersList;

	function __construct($nom, $prenom, $naissance, $adresse, $tel, $cp, $service){
		$this->nom = htmlspecialchars($nom); 
		$this->prenom = htmlspecialchars($prenom);
		$this->naissance = htmlspecialchars($naissance);
		$this->adresse = htmlspecialchars($adresse);
		$this->tel = htmlspecialchars($tel);
		$this->cp = (int) $cp;
		$this->service = (int) $service;
	}

	public static function showUser($donnee=0){
		if($donnee == 0){ 
			$where = 'WHERE users.Service = services.id';
		}else{
			$where = 'WHERE users.Service = '.$donnee.' AND services.id = '.$donnee;
		}
		$req = \App\App::getDb()->query('SELECT users.id,
											users.Nom,
											 users.Prenom,
											  users.Naissance,
											   users.Adresse,
											    users.Tel,
											     users.CP,
											      services.NomService,
											      services.Description FROM users, services '.$where, "Apple");
		return $req;
	}

	public static function formUser(){ 
		$req = \App\App::getDb()->prepare('INSERT INTO users SET 
																Nom=?,
											 					Prenom=?,
											 					Naissance=?,
											  					Adresse=?,
											    				Tel=?,
											     				CP=?,
											      				Service=?'
											      			, array($_GET["Nom"],
											       			$_GET["Prenom"],
											        		$_GET["Naissance"],
											        		$_GET["Adresse"],
											          		$_GET["Tel"],
											           		$_GET["CP"],
											            	$_GET["nomServices"]), "");
	}
	public static function deleteUser($id){
		App::getDb()->prepare("DELETE FROM users WHERE id=?", array($id), "");
	}

}