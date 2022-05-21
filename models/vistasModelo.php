<?php
	
	class vistasModelo{

		/*--------- Modelo obtener vistas ---------*/
		protected static function obtener_vistas_modelo($vistas){
			$listaBlanca=["inicio","articulos","atencion-en-linea","donde-estamos","ver-articulo"];
			if(in_array($vistas, $listaBlanca)){
				if(is_file("./views/content/".$vistas.".php")){
					$contenido="./views/content/".$vistas.".php";
				}else{
					$contenido="404";
				}			
			}else{
				$contenido="404";
			}
			return $contenido;
		}
	}