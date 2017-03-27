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
			$req = \App\App::getDb()->query('SELECT * FROM clients', "Apple");
		}else{
			$where = 'WHERE clients.Marital = Marital.id AND clients.id_credits = credits.id';
		
		$req = \App\App::getDb()->query('SELECT clients.id,
											clients.Nom,
											 clients.Prenom,
											  clients.Naissance,
											   clients.Adresse,
											    clients.Tel,
											     clients.CP,
											      Marital.Statut,
												credits.Organisme,
												credits.Montants FROM clients, Marital, credits '.$where, "Apple");
	}
		return $req;
	}

	public static function formUser($credit=null){ 
		if($credit == null){
		$req = \App\App::getDb()->prepare('INSERT INTO clients SET 
																Nom=?,
											 					Prenom=?,
											 					Naissance=?,
											  					Adresse=?,
											    				Tel=?,
											     				CP=?,
											     				Marital=?,
											      				id_credits=?'
											      			, array($_GET["Nom"],
											       			$_GET["Prenom"],
											        		$_GET["Naissance"],
											        		$_GET["Adresse"],
											          		$_GET["Tel"],
											           		$_GET["CP"],
											           		$_GET["Statut"],
											            	$_GET["organisme"]), "");
		}else{
			$req = \App\App::getDb()->prepare('INSERT INTO credits SET Organisme=?, Montants=?', array($_GET["organisme"], $_GET["montant"]),"");
		}
	}
	public static function deleteUser($id){
		App::getDb()->prepare("DELETE FROM users WHERE id=?", array($id), "");
	}

}