<?php
global $objModulo;

switch($objModulo->getId()){
	case 'cevento':
		switch($objModulo->getAction()){
			case 'guardar':
				$obj = new TEvento($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setDescripcion($_POST['descripcion']);
				
				if ($obj->guardar())
					echo json_encode(array("band" => true));
				else
					echo json_encode(array("band" => false, "mensaje" => "El evento no pudo ser creado"));
			break;
		}
	break;
	case 'listaEventos':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from evento order by fecha");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("eventos", $datos);
	break;
}
?>