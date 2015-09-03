<?php
global $objModulo;

switch($objModulo->getId()){
	case 'cchat':
		switch($objModulo->getAction()){
			case 'push':
				$obj = new TMensaje();
				if ($obj->guardar($_POST['texto'])){
					
					echo json_encode(array("band" => "true"));
				}else
					echo json_encode(array("band" => "false"));
			break;
			case 'sendUbicacion':
				global $objUserGeneral;
				$objUserGeneral->setPosicion($_POST['latitud'], $_POST['longitud']);
				
				echo json_encode(array("band" => "true"));
			break;
			case 'sendCoordinador':
				$obj = new TMensaje($_POST['id']);
				if ($obj->showCoordinador())	
					echo json_encode(array("band" => "true"));
				else
					echo json_encode(array("band" => "false"));
			break;
		}
	break;
	case 'mensajes':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from mensaje where idEvento = ".$_GET["evento"]." ".($_GET['coordinador'] == 's'?"and coordinador = 'S'":"")." order by hora asc;");
		$datos = array();
		$obj = new TMensaje();
		while(!$rs->EOF){
			$obj->setId($rs->fields['idMensaje']);
			
			$el = array();
			$el["texto"] = $obj->getTexto();
			$el["idMensaje"] = $rs->fields['idMensaje'];
			$el["hora"] = $obj->getHora();
			$el["from"] = $obj->usuario->getNombre();
			$el["coordinador"] = $obj->isShowCoordinador();
			$el["json"] = json_encode($el);
			array_push($datos, $el);
			
			$rs->moveNext();
		}
		
		$smarty->assign("mensajes", $datos);
	break;
	case 'panel': case 'coordinador':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select idEvento from evento where estado = 'A' order by fecha desc");
		
		$evento = new TEvento($rs->fields['idEvento']);
		$objEvento = array();
		$objEvento['nombre'] = $evento->getNombre();
		$objEvento['descripcion'] = $evento->getDescripcion();
		$objEvento['id'] = $evento->getId();
		$smarty->assign("evento", $objEvento);
		
		$rs = $db->Execute("select * from medio a join eventomedio using(idMedio) where idEvento = ". $evento->getId());
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("medios", $datos);
		global $ini;
		$smarty->assign("medioDefecto", $ini['sistema']['medioDefecto']);
	break;
}
?>