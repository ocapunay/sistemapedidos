<?php
/**
 * 
 */
class ModeloCategoria
{
	private $modelo;
	private $cnx;
	private $idcategoria;
	private $nombre;

	public function __construct()
	{
		$this->modelo = array();
		$driver   = 'mysql';
		$servidor = 'localhost';
		$usuario  = 'root';
		$clave    = '';
		$base     = 'dbsispedidos';
		$cadena   = "$driver:host=$servidor;dbname=$base";
		$this->cnx 	= new pdo($cadena,$usuario,$clave);
	}

	public function setidcategoria($idcategoria){
		$this->idcategoria = $idcategoria;
	}

	public function setnombre($nombre){
		$this->nombre = $nombre;
	}

	public function getidcategoria(){
		return $this->idcategoria;
	}

	public function getnombre(){
		return $this->nombre;
	}

	public function listar(){
		$sql = "SELECT idcategoria, nombre FROM categoria";
		$rs = $this->cnx->query($sql);
		return $rs;
	}

}

?>