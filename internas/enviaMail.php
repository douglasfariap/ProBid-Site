<?php 

	$nome 				= $_POST['nome'];
	$confirmaemail 		= $_POST['confirmaemail'];
	$ddd 				= $_POST['ddd'];
	$telefone			= $_POST['telefone'];
	$assunto			= $_POST['assunto'];
	$mensagem			= $_POST['mensagem'];
	
	if ($nome == '') echo '<script>alert("O campo nome e de preenchimento obrigatorio!");history.back(0)</script>';
	elseif ($confirmaemail == '') echo '<script>alert("O campo email e de preenchimento obrigatorio!");history.back(0)</script>';
	elseif ($mensagem == '') echo '<script>alert("O campo mensagem e de preenchimento obrigatorio!");history.back(0)</script>';
	
	else {
		$destinatario = 'fernando@homewebbing.com.br';
	
		$corpo = "Contato do site Probid<br><br>
		<b>Nome:</b> $nome<br>
		<b>Email:</b> $confirmaemail<br>
		<b>DDD:</b> $ddd<br>
		<b>Telefone:</b> $telefone<br>
		<b>Mensagem:</b><br>".nl2br($mensagem)."<br>";
		
		$headers = "Content-type: text/html; charset=utf-8\r\n";
		$headers .= "From: $email\r\n";
		$headers .= "Reply-To: $confirmaemail\r\n";
		mail($destinatario,$assunto,$corpo,$headers);
	
		echo '<script>alert("Email enviado com sucesso! Em breve entraremos em contato.");window.location.href=\'http://homewebbingsistemas.com.br/clientes/probid/?fale-conosco\';</script>';
	}
?>