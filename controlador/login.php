<?php
global $objModulo;

switch($objModulo->getAction()){
	case 'login':
		$db = TBase::conectaDB();
		$sql = "select idUsuario, pass from usuario where upper(user) = upper('".$_POST['usuario']."') and estado = 'A'";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		$result = array('band' => false, 'mensaje' => 'Error al consultar los datos');
		$row = $rs->fetch_assoc();
		
		if($rs->num_rows <= 0)
			$result = array('band' => false, 'mensaje' => 'El usuario no es válido'); 
		elseif($row['pass'] <> md5($_POST['pass']))
			$result = array('band' => false, 'mensaje' => 'La contraseña no es válida');
		else
			$result = array('band' => true);
		
		if($result['band']){
			$obj = new TUsuario($row['idUsuario']);
			$sesion['usuario'] = $row['idUsuario'];
			$_SESSION[SISTEMA] = $sesion;
			
			$obj->setAcceso();
		}
		
		echo json_encode($result);
	break;
	case 'logout':
		$_SESSION[SISTEMA] = array();
		session_destroy();
		
		header ("Location: index.php");
	break;
}
?>