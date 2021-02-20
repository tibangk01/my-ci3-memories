<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
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
		$manager->make(APPPATH .'third_party/test.jpg')->fit(1920 , 649)->save(APPPATH.'../assets/test-fit.jpg');
	}

	public function mail()
	{
		$this->load->config('email');
		$this->load->library('email');

		$from = $this->config->item('smtp_user');
		$to = 'solhub.group@gmail.com';
		$subject = 'Fake subject';
		$message = 'Fake Message';

		$this->email->set_newline("\r\n");
		$this->email->from($from, 'Admin');
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);

		if ($this->email->send()) {
			echo 'Your Email has successfully been sent.';
		} else {
			show_error($this->email->print_debugger());
		}
	}
}
