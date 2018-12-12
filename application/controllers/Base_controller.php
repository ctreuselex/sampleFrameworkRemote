<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_controller extends CI_Controller {

	public function index() {
		$data['pageTitle'] = "Framework";

		// HEADER
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navigation');

		loadContainer($this, function() {

			$sampleData['headTitle'] = "Framework";
			$this->load->view('bases/head-title', $sampleData);

		});

		// FOOTER
		$this->load->view('layouts/footer');
	}
}