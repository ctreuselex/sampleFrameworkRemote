<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_controller extends CI_Controller {

	public function index() {

		$data['pageTitle'] = "Framework";

		// HEADER
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navigation');

		$this->loadContainer( function() {

			$sampleData['headTitle'] = "Frameworks";
			$this->load->view('bases/head-title', $sampleData);

		});

		// FOOTER
		$this->load->view('layouts/footer');
	}

	function loadContainer($callback) {
		$this->load->view('layouts/containers/container-open'); $callback();
		$this->load->view('layouts/containers/general-close');
	}

	function loadRow($callback) {
		$this->load->view('layouts/containers/row-open'); $callback();
		$this->load->view('layouts/containers/general-close');
	}

	function loadCol($callback, $colSize) {
		$data['colSize'] = $colSize;
		$this->load->view('layouts/containers/col-open', $data); $callback();
		$this->load->view('layouts/containers/general-close');
	}

	function loadGridRow($callback) {
		$this->load->view('layouts/containers/gridrow-open'); $callback();
		$this->load->view('layouts/containers/general-close');
	}
}