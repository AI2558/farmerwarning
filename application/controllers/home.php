<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
		$this -> session -> set_userdata('page', 'home');
		
	}

	public function index() {
		//////////////////////////////////////////////////////////////////////////////////////
		$data["url_api_value"] = null;
		//////////////////////////////////////////////////////////////////////////////////////
		$this -> load -> view('header', $data);
		$this -> load -> view("home_view", $data);
		$this -> load -> view('footer');
	}

	public function value() {
		//////////////////////////////////////////////////////////////////////////////////////
		// print_r($_POST);
		$data["url_api_value"] = $this -> input -> post('url_api');
		// $url_api = $_POST['submit_url'];
		// echo $url_api;
		$this -> session -> set_userdata('url_api_session', $data["url_api_value"]);
		//////////////////////////////////////////////////////////////////////////////////////
		$this -> load -> view('header', $data);
		$this -> load -> view("home_view", $data);
		$this -> load -> view('footer');
	}

}
