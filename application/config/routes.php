<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'base_controller';


$route['grid-ones'] = 'grid_controller/byOnes';
$route['grid-ones/'] = 'grid_controller/byOnes';
$route['grid-twos'] = 'grid_controller/byTwos';
$route['grid-twos/'] = 'grid_controller/byTwos';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;