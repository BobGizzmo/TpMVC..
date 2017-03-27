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
		require '../page/home.php';
	}elseif($page==='newUser'){
		require '../page/addClients.php';
	}elseif($page==='newCard'){
		require '../page/addCredits.php';
	}elseif($page==='usersList'){
		require '../page/clientsList.php';
	}elseif($page==='detailUser'){
		require '../page/clientsDetails.php';
	}else{
		require '../page/404.php';
	}
	
$content = ob_get_clean();

require '../page/theme/default.php';
