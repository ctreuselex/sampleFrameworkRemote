<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'base_controller';


$route['grid-ones'] = 'grid_controller/byOnes';
$route['grid-ones/'] = 'grid_controller/byOnes';
$route['grid-twos'] = 'grid_controller/byTwos';
$route['grid-twos/'] = 'grid_controller/byTwos';
$route['grid-threes'] = 'grid_controller/byThrees';
$route['grid-threes/'] = 'grid_controller/byThrees';
$route['grid-fours'] = 'grid_controller/byFours';
$route['grid-fours/'] = 'grid_controller/byFours';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;