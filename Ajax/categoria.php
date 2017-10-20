<?php
require_once "../modelos/Categoria.php";

$categoria = new Categoria();

$idcategoria=isset($_POST["IdCategoria"])?LimpiarCadena($_POST["idcategoria"]):"";
$nombre=isset($_POST["nombre"])?LimpiarCadena($_POST["nombre"]):"";
$descripcion=isset($_POST["descripcion"])?LimpiarCadena($_POST["descripcion"]):"";

switch ($_GET["op"]){
    case 'guardaryeditar':
    if (empty($idcategoria)){
        $rspta = $categoria->insertar($nombre, $descripcion);
        echo $rspta ? "Categoria registrada" : "Categoria no se pudo registrar";

    }else{
$rspta = $categoria->editar($idcategoria, $nombre, $descripcion);
        echo $rspta ? "Categoria actualizada" : "Categoria no se pudo actualizar";
        
    }
    break;
    case 'desactivar':
    $rspta = $categoria->desactivar($idcategoria);
    echo $rspta ? "Categoria desactivdad": "Categoria no se puede desactivar";
    break;
    case 'activar':
    break;
    case 'mostrar':
    break;
    case 'listar':
    break
}


?>