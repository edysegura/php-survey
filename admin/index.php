<?php 
	include "../includes/contextpath.inc.php";
	include $baseDir . "/actions/authentication.action.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">
<head>
<base href="<?php echo $baseUrl; ?>/" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="author" content="WebEngineers" />
<meta name="reply-to" content="contato@WebEngineers.com.br" />
<title>Transportadora LOBO e LOBO - Pesquisa de Satisfação dos Clientes</title>

<!-- stylesheet -->
<link rel="stylesheet" href="css/loboelobo/style.css" type="text/css" title="Lobo e Lobo" />

</head>
<body id="index">

	<!-- global -->
	<div id="global">
		<!-- header -->
		<div id="header">
			<h1>Transportadora LOBO e LOBO</h1>
		</div>
		
		<!-- content -->
		<div id="content">
			<h1 id="title-admin">Acesso Administrativo</h1>
			
			<!-- formulário -->
			<form id="pesquisa" method="post" action="">
				<div id="form-content">
					
					<div id="login">
						<fieldset>
							<legend>Login</legend>
							<?php echo $authenticationFail; ?>
							<p>
								<label for="usuario">Usuário</label><br />
								<input type="text" name="usuario" id="usuario" value="<?php echo $_POST["usuario"]; ?>" maxlength="30" />
							</p>
							<p>
								<label for="senha">Senha</label><br />
								<input type="password" name="senha" id="senha" maxlength="14" />
							</p>
							<div class="botoes">
								<input class="btn-ok" type="submit" value="OK" />
							</div>
						</fieldset>
					</div>
					
				</div>
			</form>
		</div>
	<!-- fim div#global -->
	</div>
	
	<!-- footer -->
	<div id="footer">
		<p>Copyright© 2008 Transportadora Lobo e Lobo</p>
	</div>

</body>
</html>
