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
			case 'usuariosJoomla':
				 global $ini;
				 $db = TBase::conectaDB("na");
				 
				 $rs = $db->Execute("select id, name, username, email, password from ".$ini['na']['prefijo']."users");
				 
				 $db = TBase::conectaDB();
				 $datos = array();
				 $obj = new TUsuario;
				 while(!$rs->EOF){
				 	$rsU = $db->Execute("select idUsuario from usuario where idUsuario = ".$rs->fields['id']);
					$obj = new TUsuario($rsU->fields['idUsuario']);
					
					$obj->setNombre($rs->fields['username']);
					$obj->setTipo(2);
					$obj->setPass("oaxaca.1986");
					$obj->setEmail($rs->fields['email']);
					$obj->guardar(); 
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