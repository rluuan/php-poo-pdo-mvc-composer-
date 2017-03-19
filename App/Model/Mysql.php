<?php 
	namespace App\Model;

	use PDO;
	use App\Controller\CadastroUser;

	class Mysql extends Usuario{
	
		private  $pdo;
		private  $user;

		public function __construct(){
			try {
				$this->pdo = new PDO("mysql:host=localhost;dbname=startup;","root","");
				return $this->pdo;

			} catch (PDOException $e) {
				$e->getMessage();
			}	
		}
		public function vrfUser($post){
			$this->user = new Usuario();
			$this->user->verifica($post,$this->pdo);
		}
		public function cdtUser($post){
			$this->user = new CadastroUser;
			$this->user->cadastrarUser($post,$this->pdo);
		}

	}


 ?>
