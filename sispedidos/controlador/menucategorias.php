<?php
require("../modelo/modelocategoria.php");
$objcategoria = new ModeloCategoria();
$rs = $objcategoria->listar();

$resultado="";
while($reg = $rs->fetchObject()){
	$resultado.="
				<div class=\"panel panel-default\">
					<div class=\"panel-heading\">
						<h4 class=\"panel-title\">
							<a href='#' onclick=\"listaproductos($reg->idcategoria)\">$reg->nombre</a>
						</h4>
					</div>
				</div>
				";
}
echo $resultado;
?>