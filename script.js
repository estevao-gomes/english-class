
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