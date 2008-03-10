<?php
/**
 * 
 * Usuario DAO
 * @author: Edy - edy@liveware.com.br
 * 
 */

class UsuarioDAO {
	
	public function validaUsuario($usuario, $senha) {
		$validUser = FALSE;
		
		if($usuario == "admin" && $senha == "l0b03l0b0;.") {
			$validUser = TRUE;
			$_SESSION["authentication"] = TRUE;
		}
		
		return $validUser;
	}
	
};
?>
