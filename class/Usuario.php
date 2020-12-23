<?php

class Usuario {

	private $idusuario;
	private $dessenha;
	private $deslogin;
	private $dtcadastro;

	public function getIdusuario(){
		return $this->idusuario;

	}

	public function setIdusuario($value){
		$this->idusuario = $value;
	}

	public function getDessenha(){
		return $this->dessenha;
		
	}

	public function setDessenha($value){
		return $this->dessenha = $value;
	}

	public function getDeslogin(){
		return $this->deslogin;
		
	}

	public function setDeslogin($value){
		return $this->deslogin = $value;
	}

	public function getDtcadastro(){
		return $this->dtcadastro;
		
	}
	public function setDtcadastro(){
		return $this->dtcadastro = $value;
	}

	public function loadById($id){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(

			":ID"=>$id

		));

		if (count($results) > 0){

			$row = $results[0];
			$this->setIdusuario($row['idusuario']);
			$this->setDessenha($row['dessenha']);
			$this->setDeslogin($row['deslogin']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));
		
		}
	}	

	public function __toString(){

			return json_encode(array(
				"idusuario"=>$this->getIdusuario(),
				"dessenha"=>$this->getDessenha(),
				"deslogin"=>$this->getDeslogin(),
				"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
			));
		}
	}

?>