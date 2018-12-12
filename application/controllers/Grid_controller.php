<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grid_controller extends CI_Controller {

	public function index() {

		$data['pageTitle'] = "Framework";

		// HEADER
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navigation');

		$this->loadContainer( function() {

			$sampleData['headTitle'] = "Grid Samples";
			$this->load->view('bases/head-title', $sampleData);

			$this->loadRow( function() {

				// GRID BY ONES
				// ================================
				$this->loadCol( function() {
					$sampleData['gridTitle'] = "Grid, by-ones";
					$sampleData['gridCount'] = "by-ones";
					$sampleData['grid'] = array(
						array('image'=>"https://images.pexels.com/photos/428320/pexels-photo-428320.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
							'title'=>"Sample One",
							'desc'=>"Lorem ipsum dolor sit amet",
							'link'=>""),
						array('image'=>"https://images.pexels.com/photos/426893/pexels-photo-426893.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
							'title'=>"Sample One",
							'desc'=>"Lorem ipsum dolor sit amet",
							'link'=>""),
						array('image'=>"https://images.pexels.com/photos/1656770/pexels-photo-1656770.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
							'title'=>"Sample One",
							'desc'=>"Lorem ipsum dolor sit amet",
							'link'=>""),
					);

					$this->load->view('bases/grid-default', $sampleData); 
				}, 'col-md-4');
				// ================================

 				// GRID BY ONES, NO DESCRIPTION
				// ================================
				$this->loadCol( function() {
					$sampleData['gridTitle'] = "Grid, by-ones, No Description";
					$sampleData['gridCount'] = "by-ones";
					$sampleData['grid'] = array(
						array('image'=>"https://images.pexels.com/photos/428320/pexels-photo-428320.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
							'title'=>"Sample One",
							'desc'=>"",
							'link'=>""),
						array('image'=>"https://images.pexels.com/photos/426893/pexels-photo-426893.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
							'title'=>"Sample One",
							'desc'=>"",
							'link'=>""),
						array('image'=>"https://images.pexels.com/photos/1656770/pexels-photo-1656770.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
							'title'=>"Sample One",
							'desc'=>"",
							'link'=>""),
					);

					$this->load->view('bases/grid-default', $sampleData); 
				}, 'col-md-4');
				// ================================

 				// GRID BY ONES, IMAGE ONLY
				// ================================
				$this->loadCol( function() {
					$sampleData['gridTitle'] = "Grid, by-ones, Image Only";
					$sampleData['gridCount'] = "by-ones";
					$sampleData['grid'] = array(
						array('image'=>"https://images.pexels.com/photos/428320/pexels-photo-428320.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
							'title'=>"",
							'desc'=>"",
							'link'=>""),
						array('image'=>"https://images.pexels.com/photos/426893/pexels-photo-426893.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
							'title'=>"",
							'desc'=>"",
							'link'=>""),
						array('image'=>"https://images.pexels.com/photos/1656770/pexels-photo-1656770.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
							'title'=>"",
							'desc'=>"",
							'link'=>""),
					);

					$this->load->view('bases/grid-default', $sampleData); 
				}, 'col-md-4');
				// ================================

			});
		});

		// FOOTER
		$this->load->view('layouts/footer');
	}

	function loadContainer($callback) {
		$this->load->view('layouts/containers/container-open'); $callback();
		$this->load->view('layouts/containers/container-close');
	}

	function loadRow($callback) {
		$this->load->view('layouts/containers/row-open'); $callback();
		$this->load->view('layouts/containers/row-close');
	}

	function loadCol($callback, $colSize) {
		$data['colSize'] = $colSize;
		$this->load->view('layouts/containers/col-open', $data); $callback();
		$this->load->view('layouts/containers/col-close');
	}

}