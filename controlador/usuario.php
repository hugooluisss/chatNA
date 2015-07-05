<?php
global $objModulo;

switch($objModulo->getId()){
	case 'cusuario':
		switch($objModulo->getAction()){
			case 'guardar':
				$obj = new TUsuario($_POST['id']);
				$obj->setTipo($_POST['tipo']);
				$obj->setNombre($_POST['user']);
				$obj->setPass($_POST['pass']);
				$obj->setEmail($_POST['email']);
				
				if ($obj->guardar())
					echo json_encode(array("band" => true));
				else
					echo json_encode(array("band" => false, "mensaje" => "El usuario no pudo ser creado"));
			break;
			case 'eliminar':
				$obj = new TUsuario($_POST['id']);
				
				if ($obj->eliminar())
					echo json_encode(array("band" => true));
				else
					echo json_encode(array("band" => false, "mensaje" => "El usuario no pudo ser eliminado"));
			break;
			case 'ubicacion':
				$db = TBase::conectaDB();
				
				$rs = $db->Execute("select * from usuario where estado = 'A' and not (latitud = '' or longitud = '') and timediff(now(), ultimoAcceso) <= '00:05:00.000000'");
				$datos = array();
				while(!$rs->EOF){
					array_push($datos, $rs->fields);
					$rs->moveNext();
				}
				
				echo json_encode($datos);
			break;
		}
	break;
	case 'usuarios':
		$db = TBase::conectaDB();

		$rs = $db->Execute("select * from tipousuario");
		
		$datos = array();
		while(!$rs->EOF){
			$datos[$rs->fields['idTipo']] = $rs->fields['nombre'];
			$rs->moveNext();
		}
		
		$smarty->assign("tipos", $datos);
	break;
	case 'listaUsuarios':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from usuario where estado = 'A'");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("usuarios", $datos);
	break;
	case 'ubicacion':
			$db = TBase::conectaDB();
			
			$rs = $db->Execute("select * from usuario where estado = 'A' and not (latitud = '' or longitud = '') and timediff(now(), ultimoAcceso) <= '00:05:00.000000'");
			$datos = array();
			while(!$rs->EOF){
				array_push($datos, $rs->fields);
				$rs->moveNext();
			}
			
			$smarty->assign("usuarios", $datos);
		break;
}