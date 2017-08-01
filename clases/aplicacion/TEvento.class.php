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
		$sql = "select * from evento where idEvento = ".$id;
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$row = $rs->fetch_assoc();
		
		foreach($row as $key => $val)
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
			$sql = "insert into evento (idEvento, nombre, descripcion, fecha, estado) values (null, '', '', now(), 'A')";
			$rs = $db->query($sql) or errorMySQL($db, $sql);
			
			$this->idEvento = $db->$db->insert_id;
		}
		
		$sql = "update evento set
				nombre = '".$this->getNombre()."',
				descripcion = '".$this->getDescripcion()."'
			where idEvento = ".$this->getId();
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
			
		return true;
	}
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "update evento set estado = 'E' where idEvento = ".$this->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		return true;
	}
	
	public function addMedio($id = ''){
		if ($this->getId() == '' or $id == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "insert into eventomedio (idEvento, idMedio) values (".$this->getId().", ".$id.")";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		return $rs?true:false;
	}
	
	public function delMedio($id = ''){
		if ($this->getId() == '' or $id == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "delete from eventomedio where idEvento = ".$this->getId()." and idMedio = ".$id;
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		return $rs?true:false;
	}
}
?>