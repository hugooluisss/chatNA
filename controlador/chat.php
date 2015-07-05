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
		}
	break;
	case 'mensajes':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from mensaje where idEvento = ".$_GET["evento"]." order by hora asc;");
		$datos = array();
		$obj = new TMensaje();
		while(!$rs->EOF){
			$obj->setId($rs->fields['idMensaje']);
			
			$el = array();
			$el["texto"] = $obj->getTexto();
			$el["hora"] = $obj->getHora();
			$el["from"] = $obj->usuario->getNombre();
			
			array_push($datos, $el);
			
			$rs->moveNext();
		}
		
		$smarty->assign("mensajes", $datos);
	break;
	case 'panel':
		$db = TBase::conectaDB();
		$rs = $db->Execute("select idEvento from evento where estado = 'A' order by fecha desc");
		
		$evento = new TEvento($rs->fields['idEvento']);
		$objEvento = array();
		$objEvento['nombre'] = $evento->getNombre();
		$objEvento['descripcion'] = $evento->getDescripcion();
		$objEvento['id'] = $evento->getId();
		$smarty->assign("evento", $objEvento);
	break;
}
?>