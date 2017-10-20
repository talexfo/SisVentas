<?php
//incluimos inicialmente la conexion a la base de datos
require "../config/conexion.php";



Class Categoria{
    public function __construct(){
        
    }
    
    
    
    public function insertar($nombre, $descripcion)
    {
    $sql = "INSERT INTO Categoria (nombre, descripcion, condicion)
    Values('$nombre', '$descripcion','1')";
        
        return ejecutarConsulta($sql);
        
        
        
    }
    
    
    
    public function editar($idcategoria, $nombre, $descripcion)
    {
        
        $sql = "update Categoria set nombre = '$nombre', descripcion = '$descripcion'
        where IdCategoria = '$idcategoria'";
        return ejecutarConsulta($sql);
    }
    
    
    public function desactivar($idcategoria){
        $sql = "update Categoria set codicion = '0' where idcategoria = '$idcategoria'";
    return ejecutarConsulta($sql);
    }
    
     public function activar($idcategoria){
        $sql = "update Categoria set codicion = '1' where idcategoria = '$idcategoria'";
         return ejecutarConsulta($sql);
    }
    
    
    
    public function mostrar($idcategoria){
        $sql = "select * from categoria where idcategoria = '$idcategoria'";
        
        return ejecutarConsultaSimpleFile($sql)
    }
    
    
    public function listar(){
        $sql = "select * from categoria";
        return ejecutarConsulta($sql);
    }
}

?>