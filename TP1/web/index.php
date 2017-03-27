<?php
require '../app/Autoloader.php';
App\Autoloader::register();

if (isset($_GET['p'])){
	$page = $_GET['p'];
}else{
	$page = 'home';
}

ob_start();

	if($page==='home'){

		require '../page/home.php';
	}elseif($page==='user'){
		require '../page/utilisateur.php';
	}elseif($page==='addUser'){
		require '../page/addUser.php';
	}else{
		require '../page/404.php';
	}
	
$content = ob_get_clean();

require '../page/theme/default.php';
