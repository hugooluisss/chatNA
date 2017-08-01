<?php
Class TUsuario{
	private $idUsuario;
	private $idTipo;
	private $user;
	private $pass;
	private $email;
	private $ultimoAcceso;
	private $navegador;
	private $versionNavegador;
	private $sistemaOperativo;
	
	public function TUsuario($id = ''){
		$this->setId($id);
				
		return true;
	}
	
	public function setId($id = ''){
		if ($id == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "select * from usuario where idUsuario = ".$id;
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		foreach($rs->fields as $field => $val)
			$this->$field = $val;
		
		return true;
	}
	
	public function setNombre($val = ''){
		$this->user = $val;
		return true;
	}
	
	public function getNombre(){
		return $this->user;
	}
	
	public function getId(){
		return $this->idUsuario;
	}
	
	public function isAdmin(){
		if ($this->getId() == '') return false;
		
		return $this->idTipo == 1; 
	}
	
	public function setTipo($val = 2){
		$this->idTipo = $val;
		return true;
	}
	
	public function getTipo(){
		return $this->idTipo;
	}
	
	public function setPass($val = '', $encriptado = false){
		$this->pass = $encriptado?$val:md5($val);
		
		return true;
	}
	
	public function setEmail($val = ''){
		$this->email = $val;
		
		return true;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function guardar(){
		$db = TBase::conectaDB();
		
		$sql = "select * from usuario where user = '".$this->getNombre()."' and not estado = 'E'";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		if ($rs->num_rows == 0){
			$row = $rs->fetch_assoc();
			if ($row['idUsuario'] <> $this->getId())
				return false;
		}
		
		if ($this->getId() == ''){
			$sql = "insert into usuario (idUsuario, idTipo, user, pass, email, estado, ultimoAcceso) values (null, 2, '', null, null, 'A', null)";
			$rs = $db->query($sql) or errorMySQL($db, $sql);
			
			$this->idUsuario = $db->insert_id;
		}
		
		$sql = "update usuario set
				idTipo = '".$this->idTipo."',
				user = '".$this->getNombre()."',
				pass = '".$this->pass."',
				email = '".$this->getEmail()."'
			where idUsuario = ".$this->getId();
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
			
		return true;
	}
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "update usuario set estado = 'E' where idUsuario = ".$this->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		return true;
	}
	
	public function setAcceso(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "update usuario set ultimoAcceso = now() where idUsuario = ".$this->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		return true;
	}
	
	public function setPosicion($lat, $lon){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "update usuario set latitud = '".$lat."', longitud = '".$lon."' where idUsuario = ".$this->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		return true;
	}
	public function getUltimoAcceso(){
		return $this->getId() == ""?'':$this->ultimoAcceso;
	}
}
?>