<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('Event_model');

        

        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        $data = [];
        
        $fdate = date('Y-m-d');
        $events = $this->Event_model->EventDataAll($fdate);
        $data['eventdata'] = $events;
        $this->load->view('Events/list', $data);
    }

   
}
