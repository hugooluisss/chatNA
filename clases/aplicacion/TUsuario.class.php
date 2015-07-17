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
		
		$browser=array("IE","OPERA","MOZILLA","NETSCAPE","FIREFOX","SAFARI","CHROME");
		$os=array("WIN","MAC","LINUX");
		
		# definimos unos valores por defecto para el navegador y el sistema operativo
		$this->navegador = "Otro";
		$this->versionNavegador = "0.0";
		$this->sistemaOperativo = "";
		# buscamos el navegador con su sistema operativo
		foreach($browser as $parent){
			$s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
			$f = $s + strlen($parent);
			$version = substr($_SERVER['HTTP_USER_AGENT'], $f, 15);
			$version = preg_replace('/[^0-9,.]/','',$version);
			if ($s){
				$this->navegador = $parent;
				$this->versionNavegador = $version;
			}
		}
		
		foreach($os as $val){
			if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']),$val) !== false)
				$this->sistemaOperativo = $val;
		}
		
		return true;
	}
	
	public function setId($id = ''){
		if ($id == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from usuario where idUsuario = ".$id);
		
		foreach($rs->fields as $field => $val)
			$this->$field = $val;
		
		return true;
	}
	
	public function getSistemaOperativo(){
		if ($this->idUsuario == '') return '';
		return $this->sistemaOperativo;
	}
	
	public function getVersionNavegador(){
		if ($this->idUsuario == '') return '';
		return $this->versionNavegador;
	}
	
	public function getNavegador(){
		if ($this->idUsuario == '') return '';
		return $this->navegador;
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
		
		$rs = $db->Execute("select * from usuario where user = '".$this->getNombre()."' and not estado = 'E'");
		if (!$rs->EOF){
			if ($rs->fields['idUsuario'] <> $this->getId())
				return false;
		}
		
		if ($this->getId() == ''){
			$rs = $db->Execute("insert into usuario (idUsuario, idTipo, user, pass, email, estado, ultimoAcceso) values (null, 2, '', null, null, 'A', null)");
			$this->idUsuario = $db->Insert_ID();
		}
		
		$db->Execute("update usuario set
				idTipo = '".$this->idTipo."',
				user = '".$this->getNombre()."',
				pass = '".$this->pass."',
				email = '".$this->getEmail()."'
			where idUsuario = ".$this->getId());
			
		return true;
	}
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$db->Execute("update usuario set estado = 'E' where idUsuario = ".$this->getId());
		
		return true;
	}
	
	public function setAcceso(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$db->Execute("update usuario set ultimoAcceso = now() where idUsuario = ".$this->getId());
		
		return true;
	}
	
	public function setPosicion($lat, $lon){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$db->Execute("update usuario set latitud = '".$lat."', longitud = '".$lon."' where idUsuario = ".$this->getId());
		
		return true;
	}
	public function getUltimoAcceso(){
		return $this->getId() == ""?'':$this->ultimoAcceso;
	}
}
?>