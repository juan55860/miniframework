<?php

class Inflector
{
	public static function camel($value)
	{
		$segments = explode('-', $value);
		//Cada vez que haya un item se llama la función anónima 
		//donde se le pasa un valor por referencia y se llama al método ucfirst para
		//poner la primera letra en mayúscula.
		array_walk($segments, function (&$item)
		{
			$item = ucfirst($item);
		});

		// toma cada una de las palabras del array y las entrega como una cadena completa, 
		//el delimitador es una cadena vacia.
		return implode('',$segments); 
	}

	public static function lowerCamel($value)
	{
		return lcfirst((static::camel($value)));
	}

}