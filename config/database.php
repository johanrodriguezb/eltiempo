<?php

class Conectar
{

	public static function conexion()
	{

		$conexion = new mysqli("localhost", "root", "Johan12345*", "timeproyect");
		return $conexion;
	}
}
