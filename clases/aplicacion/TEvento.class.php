<?php
Class TEvento{
	private $idEvento;
	private $nombre;
	private $descripcion;
	private $fecha;
	private $estado;
	
	public function TEvento($id = ''){
		if ($id <> '')
			$this->setId($id);
	}
	
	public function setId($id = ''){
		if ($id == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from evento where idEvento = ".$id);
		
		foreach($rs->fields as $key => $val)
			$this->$key = $val;
		
		return true;
	}
	
	public function getId(){
		return $this->idEvento;
	}
	
	public function setNombre($val = ''){
		$this->nombre = $val;
		return true;
	}
	
	public function getNombre(){
		return $this->nombre;
	}
	
	public function setDescripcion($val = ''){
		$this->descripcion = $val;
		return true;
	}
	
	public function getDescripcion(){
		return $this->descripcion;
	}
	
	public function guardar(){
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->Execute("insert into evento (idEvento, nombre, descripcion, fecha, estado) values (null, '', '', now(), 'A')");
			$this->idEvento = $db->Insert_ID();
		}
		
		$db->Execute("update evento set
				nombre = '".$this->getNombre()."',
				descripcion = '".$this->getDescripcion()."'
			where idEvento = ".$this->getId());
			
		return true;
	}
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$db->Execute("update evento set estado = 'E' where idEvento = ".$this->getId());
		
		return true;
	}
}
?>