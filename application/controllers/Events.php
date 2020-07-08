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
        
        $this->db->select("city");
        $this->db->group_by('city');
        $this->db->order_by('city');
        $query = $this->db->get('events');
        $category = $query->result_array();
        $data['cities'] = $category;
        
        $query = $this->db->get('category');
        $category = $query->result_array();
        $data['category'] = $category;
                
        $fdate = date('Y-m-d');
        $datearray = array();
        for ($i = 0; $i <= 6; $i++) {
            $ndate = date('Y-m-d', strtotime(" +$i day"));
            $datearray[$ndate] = date_format(date_create($ndate), "dS F");
        }

        $data['datearray'] = $datearray;
        $events = $this->Event_model->EventDataAll($fdate);
        $data['eventdata'] = $events;
        $this->load->view('Events/list', $data);
    }

    public function details($event_id) {
        $events = $this->Event_model->EventData($event_id);
        $data['eventdata'] = $events;
        $this->load->view('Events/details', $data);
    }

}
