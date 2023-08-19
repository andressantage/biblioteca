<?php
session_start();
if(!isset($_SESSION['correo'])){
    header('Location: ../index.html');
    exit;
}
    header("Access-Control-Allow-Origin: *");
    // Conexión a la base de datos
    include("back/conexion.php");
    $conexion=conectar();

    // Consulta
    $consulta = "SELECT * FROM libros";
    $resultado = mysqli_query($conexion, $consulta);

    // Almacenamiento de datos en una array
    $datos = array();
    
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $lista=array(
            'LibrosID'=>$fila['LibrosID'],
            'CodigoBarrasID'=>$fila['CodigoBarrasID'],
            'Titulo'=>$fila['Titulo'],
            'Autor'=>$fila['Autor'],
            'ClasificacionID'=>$fila['ClasificacionID'],
            'CodigoClasificacion'=>$fila['CodigoClasificacion'],
            'Codigo_Autor'=>$fila['Codigo_Autor'],
            'N_Ejemplares'=>$fila['N_Ejemplares'],
            'OrigenID'=>$fila['OrigenID'],
            'N_Disponible'=>$fila['N_Disponible'],
            'EtiquetaID'=>$fila['EtiquetaID'],
            'BibliotecaID'=>$fila['BibliotecaID'],
            'SalaID'=>$fila['SalaID'],
            'Observacion'=>$fila['Observacion']
        );
        
        $datos[] = $lista;
    }
    $json = json_encode($datos);
    echo $json;

?>