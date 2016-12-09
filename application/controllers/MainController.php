<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class MainController extends CI_Controller
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

	public function index(){
		$this->load->view('includes/header');
		$this->load->view('helloWorld');
		$this->load->view('includes/footer');

	}
}