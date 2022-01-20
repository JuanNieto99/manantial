<?php 
	include '../../publico/includes.php';
	header('Content-Type: application/json; charset=utf-8');
	 
	class Modelproducto  
	{
		
 
		 public function lista()
		 {
		 		$conexiondb = conexion();
          
	   		$vista = 'vista_lista_productos';
	    
 

	      $sql = "SELECT `id`, `imagen`, `precio` ,replace( replace ( replace (replace( replace (`nombre`, 'á', 'a' ), 'é', 'e' ), 'í', 'i' ), 'ó', 'o' ), 'ú', 'u' ) as nombre FROM `productos` WHERE estado='0' GROUP by id ORDER BY RAND()";
	          $retorno = $conexiondb->query($sql);
			  $carrusel = "";
	          while ($r = $retorno->fetch_assoc()) {

                     $carrusel .= "
                      <div class='slide'>
                            <div class='contenedor_producto' >                   
                                <img src='assets/imagenes_producto/".$r["imagen"]."' class='imagen_producto' >
                                <br><br>
                                <p class='contenedor_centra_texto_producto'>".strtoupper( $r["nombre"])."</p>
                                <p class='contenedor_centra_texto_producto color_precio'>$".number_format($r["precio"],2,',','.').manantial_10." </p>                    
                            </div>
                        </div>";
                  
	          }
	          
	             
	   		 $conexiondb->close();
	    
	   	  
	         return   $carrusel;
 
		 }


	}
 
 ?>