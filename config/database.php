<?php
	
	class Conectar{
		
		public static function conexion(){
			
			$conexion = new mysqli("us-cdbr-east-04.cleardb.com","b868986095efeb","45ced77b","heroku_81166031e3e1941");
			return $conexion;
			
		}
	}
?>