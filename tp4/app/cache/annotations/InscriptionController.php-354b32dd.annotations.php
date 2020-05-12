<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'controllers\\InscriptionController' => 
  array (
  ),
),
  'controllers\\InscriptionController::index' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\router\\GetAnnotation', "_default","name"=>"Home")
  ),
  'controllers\\InscriptionController::Inscription' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "Inscription")
  ),
  'controllers\\InscriptionController::bouton' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "Inscription")
  ),
);

