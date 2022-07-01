<?php 
 conexión de clase
{
	conexion  $ publica ;
	función  __construir ()
	{
		$ this -> conexion =mysqli_connect( 'localhost' , 'root' , '' , ' vnbook ' );
		$ this -> conexion =mysqli_connect( 'localhost' , 'root' , '' , ' vn_book ' );
	}
}
