function validateForm(data) {
	var nome = document.getElementsByName('Nome');
	var email = document.getElementsByName('email').value;
	var password = document.getElementsByName('password').value;
	var conf_password = document.getElementsByName('conf_password').value;
	var contato = document.getElementsByName('contato').value;
	var token = document.getElementsByName('token').value;

	if(!nome) {
		alert('Por favor preencha o campo nome.');
		return false;
	}
	if(!email) {
		alert('Por favor preencha o campo email.');
		return false;
	}
	if(!password) {
		alert('Por favor preencha o campo password.');
		return false;
	}
	if(!conf_password) {
		alert('Por favor preencha o campo de confirmação de senha.');
		return false;
	}
	if(!contato) {
		alert('Por favor preencha o campo contato.');
		return false;
	}
	if(!token) {
		alert('Por favor preencha o campo token.');
		return false;
	}

	if(password !== conf_password) {
		alert("Confirmação de senha incorreta");
	}


}