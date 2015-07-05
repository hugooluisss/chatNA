<?php
global $objModulo;

switch($objModulo->getId()){
	case 'cchat':
		switch($objModulo->getAction()){
			case 'push':
				$obj = new TMensaje();
				if ($obj->guardar($_POST['texto']))
					echo json_encode(array("band" => "true"));
				else
					echo json_encode(array("band" => "false"));
			break;
		}
	break;
	case 'mensajes':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from mensaje order by hora asc;");
		$datos = array();
		while(!$rs->EOF){
			$obj = new TMensaje($rs->fields['idMensaje']);
			
			$el = array();
			$el["texto"] = $obj->getTexto();
			$el["hora"] = $obj->hora();
			$el["from"] = $obj->usuario->getNombre();
			
			array_push($datos, $el);
			
			$rs->moveNext();
		}
		
		$smarty->assign("mensajes", $datos);
	break;
}
?>