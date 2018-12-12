<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function loadContainer($main, $callback) {
	$main->load->view('layouts/containers/container-open'); $callback();
	$main->load->view('layouts/containers/general-close');
}

function loadRow($main, $callback) {
	$main->load->view('layouts/containers/row-open'); $callback();
	$main->load->view('layouts/containers/general-close');
}

function loadCol($main, $callback, $colSize) {
	$data['colSize'] = $colSize;
	$main->load->view('layouts/containers/col-open', $data); $callback();
	$main->load->view('layouts/containers/general-close');
}

function loadGridRow($main, $callback) {
	$main->load->view('layouts/containers/gridrow-open'); $callback();
	$main->load->view('layouts/containers/general-close');
}