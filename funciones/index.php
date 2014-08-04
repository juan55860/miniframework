<?php

/*
 * El FrontEnd controller se encarga de configurar la aplicación
 */
require "config.php";
require "helpers.php";
// llamar al controlador indicado


controller($_GET['url']);

