<?php

/*
 * El FrontEnd controller se encarga de configurar la aplicación
 */
require "config.php";
require "helpers.php";


require "library/Request.php";
require "library/Inflector.php";
require "library/Response.php";
require "library/View.php";



if(empty($_GET['url']))
{
	$url = "";
}
else
{
	$url = $_GET['url'];
}

$request = new Request($url);
$request->execute();


//Test http://localhost/applaravel/poo/contactos/city/bogota