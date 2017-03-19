<?php 
	use App\Model\Mysql;
	

	require_once 'vendor/autoload.php';

	
	extract($_POST);
	
	$m = new Mysql();

	if($flagVrfTipoBotao==1){

		$m->vrfUser($_POST);
	}else{

		$m->cdtUser($_POST);
	}
	
	



 ?>
