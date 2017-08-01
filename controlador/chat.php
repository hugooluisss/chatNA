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
				global $userSesion;
				$userSesion->setPosicion($_POST['latitud'], $_POST['longitud']);
				
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
		/*$db = TBase::conectaDB();
		
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
		 * */
		$db = TBase::conectaDB();
		
		$s = $_POST['ultimo'] <> ''?(" and idMensaje > ".$_POST['ultimo']):'';
		$sql = "select * from mensaje where idEvento = ".$_POST["id"]." ".($_GET['coordinador'] == 's'?"and coordinador = 'S'":"").$s." order by hora asc;";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		$datos = array();
		$obj = new TMensaje();
		while($row = $rs->fetch_assoc()){
			$obj->setId($row['idMensaje']);
			
			$el = array();
			$el["texto"] = $obj->getTexto();
			$el["idMensaje"] = $row['idMensaje'];
			$el["hora"] = $obj->getHora();
			$el["from"] = $obj->usuario->getNombre();
			$el["coordinador"] = $obj->isShowCoordinador();
			$el["json"] = json_encode($el);
			array_push($datos, $el);
		}
		
		echo json_encode(array("band" => true, "mensajes" => $datos));		 
	break;
	case 'panelPrincipal': case 'coordinador':
		$db = TBase::conectaDB();
		
		$sql = "select idEvento from evento where estado = 'A' order by fecha desc";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		$row = $rs->fetch_assoc();
		$evento = new TEvento($row['idEvento']);
		$objEvento = array();
		$objEvento['nombre'] = $evento->getNombre();
		$objEvento['descripcion'] = $evento->getDescripcion();
		$objEvento['id'] = $evento->getId();
		$smarty->assign("evento", $objEvento);
		
		if ($evento->getId() <> ''){
		    $sql = "select * from medio a join eventomedio using(idMedio) where idEvento = ". $evento->getId();
		    $rs = $db->query($sql) or errorMySQL($db, $sql);
		    
		    $datos = array();
		    while($row = $rs->fetch_assoc()){
		    	array_push($datos, $row);
	    	}
		
	    	$smarty->assign("medios", $datos);
		}
		global $ini;
		$smarty->assign("medioDefecto", $ini['sistema']['medioDefecto']);
	break;
}
?>