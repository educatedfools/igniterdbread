<?php

	class Practice extends CI_Controller {
		function index() {
			$this->load->model('practice_model');
			$data['result'] = $this->practice_model->getData();
			$data['page_title'] = "Chris and Jessie's wedding RSVP form";

			$this->load->view('practice_view', $data);
		}
	}
?>

<?php
class main_controller extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->model('form_model');
}
function index() {
$this->load->view('form');
}
}
?>