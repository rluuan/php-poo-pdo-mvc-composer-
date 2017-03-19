
function enviaFormulario($flagVrfTipoBotao){
	switch($flagVrfTipoBotao) {
		case 1:
			if($("#id_login").val()==""){

				$("#id_login").css("border-color","transparent");
				alert("Preencha o campo do login!!");
				$("#id_login").css("border-color","red");

			}else if($("#id_senha").val()==""){

				$("#id_senha").css("border-color","transparent");
				alert("Preencha o campo da senha!!");
				$("#id_senha").css("border-color","red");
			}else{

				$("#id_flagVrfTipoBotao").val(1);
				$("#form1index").submit();
			}
		break;
		case 2:
			document.location.href = 'cadastro.php';
		break;
	}
}
function cadastrar(){
	if($("#id_login").val()==""){

		$("#id_login").css("border-color","transparent");
		alert("Preencha o campo do login!!");
		$("#id_login").css("border-color","red");

	}else if($("#id_senha").val()==""){

		$("#id_senha").css("border-color","transparent");
		alert("Preencha o campo da senha!!");
		$("#id_senha").css("border-color","red");
	}else{

		$("#id_flagVrfTipoBotao").val(2);
		$("#form1index").submit();
	}
}
