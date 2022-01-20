<?php 
 

function productos_inicio(){
      

    $conexiondb = conexion();
  
     $vista = 'vista_lista_productos';

/*
     if(!validar_existencia_vista($vista)){
         $conexiondb->query("CREATE VIEW vista_lista_productos AS SELECT p.`id`, p.`nombre`, p.`cantidad`, p.`stock`, p.`precio`, p.`palabra_clave`, (SELECT nombre FROM categorias WHERE id =p.id_categoria) as categoria,p.id_categoria, p.`descripcion`, p.`estado`, p.`visible`,  (SELECT id_producto FROM imagenes WHERE id_producto=p.`id` GROUP by id_producto) as foto ,p.link_mercado_libre,p.porcentaje,p.moneda,p.envio_gratis FROM `productos` p  GROUP BY p.`id` DESC");
     }*/

      $sql = "SELECT `id`, `nombre`, `imagen`, `precio`  FROM `productos` WHERE estado='0' GROUP by id ORDER BY RAND()  ";
      $retorno = $conexiondb->query($sql);
      $carrusel = "";
      while ($r = $retorno->fetch_assoc()) {

             $carrusel .= "
              <div class='slide'>
                    <div class='contenedor_producto' >                   
                        <img src='assets/imagenes_producto/".$r["imagen"]."' class='imagen_producto' >
                        <br><br>
                        <p class='contenedor_centra_texto_producto'>".$r["nombre"]."</p>
                        <p class='contenedor_centra_texto_producto color_precio'>$".number_format($r["precio"],2,',','.')."</p>                    
                    </div>
                </div>";
          
      }
      
         
     $conexiondb->close();

  
     return   $carrusel;

 }
 function eliminar_tildes($cadena){

    //Codificamos la cadena en formato utf8 en caso de que nos de errores
    $cadena = utf8_encode($cadena);

    //Ahora reemplazamos las letras
    $cadena = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $cadena
    );

    $cadena = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $cadena );

    $cadena = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $cadena );

    $cadena = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $cadena );

    $cadena = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $cadena );

    $cadena = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C'),
        $cadena
    );

    return $cadena;
}
 ?>