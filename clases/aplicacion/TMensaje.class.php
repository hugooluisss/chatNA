<?php
Class TMensaje{
	private $idMensaje;
	public $usuario;
	private $hora;
	private $texto;
	private $coordinador;
	
	public function TMensaje($id = ''){
		if ($id == '') return false;
		
		$this->setId($id);
	}
	
	public function setId($id = ''){
		if ($id == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from mensaje where idMensaje = ".$id);

		foreach($rs->fields as $field => $val)
			switch($field){
				case 'idUsuario':
					$this->usuario = new TUsuario($val);
				break;
				default:
					$this->$field = $val;
				break;
			}
			
		return true;
	}
	
	public function getId(){
		   return $this->idMensaje;
	}
	
	public function guardar($mensaje = ''){
		global $sesion;
		if ($mensaje == '' or $sesion['usuario'] == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select idEvento from evento where estado = 'A' order by fecha");
		if ($rs->EOF) return false;
		$rs = $db->Execute("insert into mensaje (idMensaje, idEvento, idUsuario, hora, texto) values (null, ".$rs->fields['idEvento'].", ".$sesion['usuario'].", now(), '".$mensaje."')");
		if ($rs) return true;
		
		return false;
	}
	
	public function getTexto(){
		return $this->texto;
	}
	
	public function getHora(){
		return $this->hora;
	}
	
	public function showCoordinador(){
		$db = TBase::conectaDB();
		
		return $db->Execute("update mensaje set coordinador = 'S' where idMensaje = ".$this->getId())?true:false;
	}
	
	public function isShowCoordinador(){
		if ($this->getId() == '') return false;
		
		return $this->coordinador == 'S';
	}
}
?>