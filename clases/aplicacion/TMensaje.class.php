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
		$sql = "select * from mensaje where idMensaje = ".$id;
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$row = $rs->fetch_assoc();
		
		foreach($row as $field => $val)
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
		$sql = "select idEvento from evento where estado = 'A' order by fecha";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		if ($rs->num_rows == 0) return false;
		
		$sql = "insert into mensaje (idMensaje, idEvento, idUsuario, hora, texto) values (null, ".$rs->fields['idEvento'].", ".$sesion['usuario'].", now(), '".$mensaje."')";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
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
		
		$sql = "update mensaje set coordinador = 'S' where idMensaje = ".$this->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		return $rs?true:false;
	}
	
	public function isShowCoordinador(){
		if ($this->getId() == '') return false;
		
		return $this->coordinador == 'S';
	}
}
?>