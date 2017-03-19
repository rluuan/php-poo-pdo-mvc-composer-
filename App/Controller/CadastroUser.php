<?php 
	namespace App\Controller;

	
	use App\Model\Usuario;

	class CadastroUser{
	
		private  $vrfUser;
		private  $pdo;
		private  $user;
		
		public function cadastrarUser($post,$pdo){
			$this->vrfUser = new Usuario;

			if(!$this->vrfUser->verificaUserCadastro($post,$pdo)){
				$this->vrfUser->scriptALertFalse("Já existe um usuário com esses dados no banco de dados!!","login.php");
				exit;
			}
			$this->pdo   = $pdo;

			$this->user  = $this->pdo->beginTransaction();
			$this->user  = $this->pdo->query("INSERT INTO users_cadastros(login,pass) VALUES('$post[txtName]','$post[txtPass]')");
			
			if(! $this->user):
				$this->pdo->rollBack();
				die("Falha no cadastro de usuarios");
			endif;

			$this->vrfUser->scriptALertFalse("Cadastrado com sucesso!!","login.php");
			$this->pdo->commit();
		}


	}


 ?>
