$("#button_env").on('click', function(event){
	let $email=$("#email");
	let $email_vacio=$("#email_vacio");
	let $email_invalido=$("#email_invalido");

	if($email.val()==""){
		$email_vacio.removeClass("element_hidden");
	} else{
		$email_vacio.addClass("element_hidden");
		$email_invalido.addClass("element_hidden");
	 	if(!valida_email($email.val())){
			$email_invalido.removeClass("element_hidden");
		}
	}

	let $comm=$("#comm");
	let $nime=$("#nime");
	let $comm_incorrecto=$("#comm_incorrecto");

	if($comm.val() == ""){
		$comm_incorrecto.removeClass("element_hidden");
	} else{
		$comm_incorrecto.addClass("element_hidden");
	}

	$("#mues").text($nime.val());
	$("#mues1").text($email.val());
	$("#mues2").text($comm.val());
});

function valida_email(email){
	var regex_email=/\S+@\S+\.\S+/;
	return regex_email.test(email);
}