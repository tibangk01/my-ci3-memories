<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function unit_test()
	{
		$this->load->library('unit_test');
		$this->unit->use_strict(TRUE);
		// $this->unit->active(FALSE);

		$test = 1 + 1;
		$expected_result = 2;
		$test_name = 'Adds one plus one';
		$this->unit->run($test, $expected_result, $test_name);
		echo $this->unit->report();
	}

	public function image_intervention()
	{
		require getcwd() . '/vendor/autoload.php';
		$manager = new \Intervention\Image\ImageManager;
		$manager->make(APPPATH . '/third_party/img.jpeg')->fit(50, 50)->save(APPPATH . '/third_party/img_mini.jpeg');
	}
}
