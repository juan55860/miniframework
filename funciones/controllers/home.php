<?php

$language ="php";
$confidencial="variable confidencial";
$titulo = "Pagina de prueba";

//view('view',['language' => $language, 'titulo' =>$titulo]);
view('home',compact('language','titulo'));