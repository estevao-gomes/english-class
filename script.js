
function regError(error){   
 	let message = document.getElementById('signupErrorMessage')
 	let text = 'Erro'
 	if(error == 'userError'){
 		text = 'Erro: Usuário ja em uso.'
 	}else if(error == 'passwordError'){
 		text = 'Erro: Senha inválida. Sua senha precisa ter ao menos 10 caracteres.'
 	}else if(error == 'emailError'){
 		text = 'Erro: Email inválido.'
 	}
	message.innerHTML = '<span class="text-danger"><i class="fas fa-times"></i> '+ text +'</span>'
	return
}

function loginError(error){   
 	let message = document.getElementById('signinErrorMessage')
 	let text = 'Erro'
 	if(error == 'passwordError'){
 		text = 'Erro: Senha inválida.'
 	}else if(error == 'emailError'){
 		text = 'Erro: Email inválido.'
 	}
	message.innerHTML = '<span class="text-danger"><i class="fas fa-times"></i> '+ text +'</span>'
	return
}
function getValue(){
	let value = document.getElementById(doubtSelect).getValue
	return value
}
function showDoubt(id) {
	    var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	      if (this.readyState == 4 && this.status == 200) {
	        document.getElementById("duvida").value = this.responseText;
	      }
	    };
	    xmlhttp.open("GET", "getDoubt.php?id=" + id, true);
	    xmlhttp.send();
}

function showAvailableTimes(id) {
	let date = document.getElementById("data_agendamento_aluno").value
	    var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	      if (this.readyState == 4 && this.status == 200) {
	        document.getElementById("selecao_agendamento_horario").insertAdjacentHTML('beforeend', this.responseText);
	      }
	    };
	    xmlhttp.open("GET", "getAvailableHours.php?id=" + id + "&date=" + date, true);
	    xmlhttp.send();
}

function showUnavailableTimes(id) {
	let date = document.getElementById("data_agendamento_aluno").value
	    var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	      if (this.readyState == 4 && this.status == 200) {
	        document.getElementById("selecao_agendamento_horario").insertAdjacentHTML('beforeend', this.responseText);
	      }
	    };
	    xmlhttp.open("GET", "getNotAvailableHours.php?id=" + id + "&date=" + date, true);
	    xmlhttp.send();
}