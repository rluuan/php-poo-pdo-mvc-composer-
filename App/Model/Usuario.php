<?php 
	
	namespace App\Model;
	session_start();
	
	use PDO;

	class Usuario{
		private  $pdo;

		public function verifica($post,$pdo){
			
			$this->pdo = $pdo;
			$vrf = $this->pdo->prepare("SELECT * FROM users_cadastros WHERE login = :login AND pass = :pass");
			$vrf->bindValue(":login",$post['txtName']);
			$vrf->bindValue(":pass", $post['txtPass']);
			$vrf->execute();

			if($vrf->rowCount()<=0){
				$this->scriptALertFalse("Não foram encontrados dados no banco com essas informações,tente novamente!!","login.php");
			}else{
				$_SESSION = $vrf->fetch(PDO::FETCH_ASSOC);	
				$this->scriptALertFalse("Login Feito com sucesso!!","home.php");
			}
		}
		public function scriptALertFalse($text,$paginaDeRetorno){
			echo "<script>alert('$text')</script>";
			echo "<script>document.location.href = '$paginaDeRetorno'</script>";
		}
		public function verificaUserCadastro($post,$pdo){
			
			$this->pdo = $pdo;
			$vrf = $this->pdo->prepare("SELECT * FROM users_cadastros WHERE login = :login AND pass = :pass");
			$vrf->bindValue(":login",$post['txtName']);
			$vrf->bindValue(":pass", $post['txtPass']);
			$vrf->execute();

			if($vrf->rowCount()<=0){
				return true;
			}else{
				return false;
				
			}
		}
		
	}




?>
