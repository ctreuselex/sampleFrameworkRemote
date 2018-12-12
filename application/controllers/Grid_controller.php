<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grid_controller extends CI_Controller {

	public function byOnes() {
		$data['pageTitle'] = "Framework";

		// HEADER
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navigation');

		loadContainer($this, function() {

			$headData['headTitle'] = "Grid Samples, By Ones";
			$this->load->view('bases/head-title', $headData);

			loadRow($this, function() {

				// GRID BY ONES
				// ================================
				loadCol($this, function() {
					loadGridRow($this, function() {
						$gridData['gridTitle'] = "Grid, by-ones";
						$gridData['gridCount'] = "by-ones";
						$gridData['grid'] = array(
							array('image'=>"https://images.pexels.com/photos/428320/pexels-photo-428320.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample One",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/426893/pexels-photo-426893.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Two",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1656770/pexels-photo-1656770.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Three",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
						);

						$this->load->view('bases/grid-default', $gridData); 
					});
				}, 'col-md-4');
				// ================================

 				// GRID BY ONES, NO DESCRIPTION
				// ================================
				loadCol($this, function() {
					loadGridRow($this, function() {
						$gridData['gridTitle'] = "Grid, by-ones, No Description";
						$gridData['gridCount'] = "by-ones";
						$gridData['grid'] = array(
							array('image'=>"https://images.pexels.com/photos/428320/pexels-photo-428320.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample One",
								'desc'=>"",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/426893/pexels-photo-426893.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Two",
								'desc'=>"",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1656770/pexels-photo-1656770.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Three",
								'desc'=>"",
								'link'=>""),
						);

						$this->load->view('bases/grid-default', $gridData); 
					});
				}, 'col-md-4');
				// ================================

 				// GRID BY ONES, IMAGE ONLY
				// ================================
				loadCol($this, function() {
					loadGridRow($this, function() {
						$gridData['gridTitle'] = "Grid, by-ones, Image Only";
						$gridData['gridCount'] = "by-ones";
						$gridData['grid'] = array(
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

						$this->load->view('bases/grid-default', $gridData); 
					});
				}, 'col-md-4');
				// ================================

			});
		});

		// FOOTER
		$this->load->view('layouts/footer');
	}


	public function byTwos() {
		$data['pageTitle'] = "Framework";

		// HEADER
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navigation');

		loadContainer($this, function() {

			$gridData['headTitle'] = "Grid Samples, By Twos";
			$this->load->view('bases/head-title', $gridData);

			loadRow($this, function() {

				// GRID BY TWOS
				// ================================
				loadCol($this, function() {
					loadGridRow($this, function() {
						$gridData['gridTitle'] = "Grid, by-twos";
						$gridData['gridCount'] = "by-twos";
						$gridData['grid'] = array(
							array('image'=>"https://images.pexels.com/photos/428320/pexels-photo-428320.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample One",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/426893/pexels-photo-426893.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Two",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1656770/pexels-photo-1656770.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Three",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1659437/pexels-photo-1659437.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Four",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1262302/pexels-photo-1262302.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Five",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
						);

						$this->load->view('bases/grid-default', $gridData); 
					});
				}, 'col-md-6');
				// ================================

 				// GRID BY TWOS, NO DESCRIPTION
				// ================================
				loadCol($this, function() {
					loadGridRow($this, function() {
						$gridData['gridTitle'] = "Grid, by-twos, No Description";
						$gridData['gridCount'] = "by-twos";
						$gridData['grid'] = array(
							array('image'=>"https://images.pexels.com/photos/428320/pexels-photo-428320.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample One",
								'desc'=>"",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/426893/pexels-photo-426893.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Two",
								'desc'=>"",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1656770/pexels-photo-1656770.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Three",
								'desc'=>"",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1659437/pexels-photo-1659437.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Four",
								'desc'=>"",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1262302/pexels-photo-1262302.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Five",
								'desc'=>"",
								'link'=>""),
						);

						$this->load->view('bases/grid-default', $gridData); 
					});
				}, 'col-md-6');
				// ================================

 				// GRID BY TWOS, IMAGE ONLY
				// ================================
				loadCol($this, function() {
					loadGridRow($this, function() {
						$gridData['gridTitle'] = "Grid, by-twos, Image Only";
						$gridData['gridCount'] = "by-twos";
						$gridData['grid'] = array(
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
							array('image'=>"https://images.pexels.com/photos/1659437/pexels-photo-1659437.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"",
								'desc'=>"",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1262302/pexels-photo-1262302.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"",
								'desc'=>"",
								'link'=>""),
						);

						$this->load->view('bases/grid-default', $gridData); 
					});
				}, 'col-md-6');
				// ================================

			});
		});

		// FOOTER
		$this->load->view('layouts/footer');
	}


	public function byThrees() {
		$data['pageTitle'] = "Framework";

		// HEADER
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navigation');

		loadContainer($this, function() {

			$gridData['headTitle'] = "Grid Samples, By Threes";
			$this->load->view('bases/head-title', $gridData);

			loadRow($this, function() {

				// GRID BY THREES
				// ================================
				loadCol($this, function() {
					loadGridRow($this, function() {
						$gridData['gridTitle'] = "Grid, by-threes";
						$gridData['gridCount'] = "by-threes";
						$gridData['grid'] = array(
							array('image'=>"https://images.pexels.com/photos/428320/pexels-photo-428320.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample One",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/426893/pexels-photo-426893.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Two",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1656770/pexels-photo-1656770.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Three",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1659437/pexels-photo-1659437.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Four",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1262302/pexels-photo-1262302.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Five",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
						);
						
						$this->load->view('bases/grid-default', $gridData); 
					});
				}, 'col-md-12');
				// ================================

 				// GRID BY THREES, NO DESCRIPTION
				// ================================
				loadCol($this, function() {
					loadGridRow($this, function() {
						$gridData['gridTitle'] = "Grid, by-threes, No Description";
						$gridData['gridCount'] = "by-threes";
						$gridData['grid'] = array(
							array('image'=>"https://images.pexels.com/photos/428320/pexels-photo-428320.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample One",
								'desc'=>"",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/426893/pexels-photo-426893.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Two",
								'desc'=>"",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1656770/pexels-photo-1656770.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Three",
								'desc'=>"",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1659437/pexels-photo-1659437.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Four",
								'desc'=>"",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1262302/pexels-photo-1262302.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Five",
								'desc'=>"",
								'link'=>""),
						);

						$this->load->view('bases/grid-default', $gridData); 
					});
				}, 'col-md-12');
				// ================================

 				// GRID BY THREES, IMAGE ONLY
				// ================================
				loadCol($this, function() {
					loadGridRow($this, function() {
						$gridData['gridTitle'] = "Grid, by-threes, Image Only";
						$gridData['gridCount'] = "by-threes";
						$gridData['grid'] = array(
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
							array('image'=>"https://images.pexels.com/photos/1659437/pexels-photo-1659437.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"",
								'desc'=>"",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1262302/pexels-photo-1262302.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"",
								'desc'=>"",
								'link'=>""),
						);

						$this->load->view('bases/grid-default', $gridData); 
					});
				}, 'col-md-12');
				// ================================

			});
		});

		// FOOTER
		$this->load->view('layouts/footer');
	}


	public function byFours() {
		$data['pageTitle'] = "Framework";

		// HEADER
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/navigation');

		loadContainer($this, function() {

			$gridData['headTitle'] = "Grid Samples, By Fours";
			$this->load->view('bases/head-title', $gridData);

			loadRow($this, function() {

				// GRID BY FOURS
				// ================================
				loadCol($this, function() {
					loadGridRow($this, function() {
						$gridData['gridTitle'] = "Grid, by-fours";
						$gridData['gridCount'] = "by-fours";
						$gridData['grid'] = array(
							array('image'=>"https://images.pexels.com/photos/428320/pexels-photo-428320.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample One",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/426893/pexels-photo-426893.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Two",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1656770/pexels-photo-1656770.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Three",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1659437/pexels-photo-1659437.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Four",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1262302/pexels-photo-1262302.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Five",
								'desc'=>"Lorem ipsum dolor sit amet",
								'link'=>""),
						);
							
						$this->load->view('bases/grid-default', $gridData); 
					});
				}, 'col-md-12');
				// ================================

 				// GRID BY FOURS, NO DESCRIPTION
				// ================================
				loadCol($this, function() {
					loadGridRow($this, function() {
						$gridData['gridTitle'] = "Grid, by-fours, No Description";
						$gridData['gridCount'] = "by-fours";
						$gridData['grid'] = array(
							array('image'=>"https://images.pexels.com/photos/428320/pexels-photo-428320.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample One",
								'desc'=>"",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/426893/pexels-photo-426893.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Two",
								'desc'=>"",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1656770/pexels-photo-1656770.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Three",
								'desc'=>"",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1659437/pexels-photo-1659437.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Four",
								'desc'=>"",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1262302/pexels-photo-1262302.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"Sample Five",
								'desc'=>"",
								'link'=>""),
						);

						$this->load->view('bases/grid-default', $gridData); 
					});
				}, 'col-md-12');
				// ================================

 				// GRID BY FOURS, IMAGE ONLY
				// ================================
				loadCol($this, function() {
					loadGridRow($this, function() {
						$gridData['gridTitle'] = "Grid, by-fours, Image Only";
						$gridData['gridCount'] = "by-fours";
						$gridData['grid'] = array(
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
							array('image'=>"https://images.pexels.com/photos/1659437/pexels-photo-1659437.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"",
								'desc'=>"",
								'link'=>""),
							array('image'=>"https://images.pexels.com/photos/1262302/pexels-photo-1262302.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260",
								'title'=>"",
								'desc'=>"",
								'link'=>""),
						);

						$this->load->view('bases/grid-default', $gridData); 
					});
				}, 'col-md-12');
				// ================================

			});
		});

		// FOOTER
		$this->load->view('layouts/footer');
	}

}