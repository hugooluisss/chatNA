<?php
global $objModulo;

switch($objModulo->getId()){
	case 'cevento':
		switch($objModulo->getAction()){
			case 'guardar':
				$obj = new TEvento($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setDescripcion($_POST['descripcion']);
				
				if ($obj->guardar()){
					echo json_encode(array("band" => true));
					
					$db = TBase::conectaDB();
					$rs = $db->Execute("select idEvento from evento");
					$aux = new TEvento;
					while(!$rs->EOF){
						$aux->setId($rs->fields['idEvento']);
						if ($aux->getId() <> $obj->getId())
							$aux->eliminar();
						
						$rs->moveNext();
					}
				}else
					echo json_encode(array("band" => false, "mensaje" => "El evento no pudo ser creado"));
				
			break;
			case 'eliminar':
				$obj = new TEvento($_POST['id']);
				
				if ($obj->eliminar())
					echo json_encode(array("band" => true));
				else
					echo json_encode(array("band" => false, "mensaje" => "El evento no pudo ser eliminado"));
			break;
			
			case 'addSala':
				$obj = new TEvento($_POST['id']);
				
				if ($obj->addMedio($_POST['sala']))
					echo json_encode(array("band" => true));
				else
					echo json_encode(array("band" => false, "mensaje" => "No pudo ser agregada la sala"));
			break;
			case 'delSala':
				$obj = new TEvento($_POST['id']);
				
				if ($obj->delMedio($_POST['sala']))
					echo json_encode(array("band" => true));
				else
					echo json_encode(array("band" => false, "mensaje" => "Upps... no se pudo eliminar el medio de la sala"));
			break;
		}
	break;
	case 'listaEventos':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from evento order by fecha desc");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("eventos", $datos);
	break;
	case 'panelAdmonEvento':
		$db = TBase::conectaDB();

		$smarty->assign("evento", new TEvento($_GET['id'])); 
	break;
	case 'listaConectados':
		$db = TBase::conectaDB();
			
		$rs = $db->Execute("select idUsuario from usuario where estado = 'A' order by ultimoAcceso desc");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, new TUsuario($rs->fields['idUsuario']));
			$rs->moveNext();
		}
		
		$smarty->assign("usuarios", $datos);
	break;
	case 'mediosEvento':
		$obj = new TEvento($_GET['id']);
		$smarty->assign("nombreEvento", $obj->getNombre());
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from medio");
		$datos = array();
		while(!$rs->EOF){
			$rsAux = $db->Execute("select idEvento from eventomedio where idEvento = ".$_GET["id"]." and idMedio = ".$rs->fields['idMedio']);
			$rs->fields['incluido'] = !$rsAux->EOF;
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("medios", $datos);
		
		$smarty->assign("idEvento", $_GET['id']);
	break;
}
?>