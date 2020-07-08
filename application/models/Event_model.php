<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    public function AppointmentDataByCountry($country) {
        $this->db->where('country', $country);
        $this->db->group_by('days');
        $this->db->order_by('id');
        $query = $this->db->get('appointment_entry');
        $countryAppointment = $query->result_array();

        $appointmentData = array();

        foreach ($countryAppointment as $akey => $avalue) {
            $aid = $avalue['aid'];
            $this->db->where('aid', $aid);

            $query = $this->db->get('appointment_entry');
            $timeData = $query->result_array();
            $avalue['dates'] = array();
            foreach ($timeData as $tkey => $tvalue) {
                $temparray = array();
                $temparray['date'] = $tvalue['date'];
                $temparray['timing1'] = $tvalue['from_time'];
                $temparray['timing2'] = $tvalue['to_time'];
                array_push($avalue['dates'], $temparray);
            }
            array_push($appointmentData, $avalue);
        }

        return $appointmentData;
    }

    public function EventDataAll($sart_date) {
        $date = date("Y-m-d");
        $this->db->where('date>=', $date);

        $this->db->group_by('event_id');
        $this->db->order_by('date desc');
        $query = $this->db->get('events_dates');
        $countryAppointment = $query->result_array();
        
        $appointmentData = array();
        foreach ($countryAppointment as $akey => $rvalue) {
            $this->db->where('id', $rvalue['event_id']);
            $query = $this->db->get('events');
            $eventdata = $query->row_array();

            if ($eventdata) {
                $aid = $eventdata['days'];
                $eventdata['image'] = ADMINURL . "assets/media/" . $eventdata['image'];
                $this->db->where('days', $aid);
                $query = $this->db->get('events');
                $timeData = $query->result_array();

                $this->db->where('id', $eventdata['user_id']);
                $query = $this->db->get('admin_users');
                $userData = $query->row_array();
                $userData['image'] = ADMINURL . "assets/profile_image/" . $userData['image'];
                $eventdata['manager'] = $userData;
                $eventdata['date'] = $rvalue['date'];
                
               
                
                $this->db->where('event_id', $rvalue['event_id']);
                $query = $this->db->get('events_dates');
                $eventdates = $query->result_array();
                $eventdata['dates'] = $eventdates;
                
                $dateclass = "";
                foreach ($eventdates as $dkey => $dvalue) {
                    
                    $dateclass .= " ".$dvalue['date'];
                }
                 $eventdata['dateclass'] = $dateclass;

                array_push($appointmentData, $eventdata);
            }
        }
        return $appointmentData;
    }

    function EventData($appId) {
        $appointmentSingle = array();
        $this->db->where('id', $appId);
   
        $query = $this->db->get('events');
        $appData = $query->result_array();
        $appDataEvent = $appData[0];
        $appDataEvent['image'] = ADMINURL . "assets/media/" . $appDataEvent['image'];
        $appointmentSingle["event"] = $appDataEvent;
        $this->db->where('id', $appDataEvent['user_id']);
        $query = $this->db->get('admin_users');
        $userData = $query->row_array();
        $userData['image'] = ADMINURL . "assets/profile_image/" . $userData['image'];
        $appointmentSingle['manager'] = $userData;
        $appointmentSingle['date_time_list'] = [];
        
        $this->db->where('event_id', $appId);
        $query = $this->db->get('events_dates');
        $eventdatelist = $query->result_array();
        
        foreach ($eventdatelist as $key => $value) {
            $temp = array(
                'from_time' => $value['from_time'],
                'to_time' => $value['to_time'],
                'date' => $value['date'],
                'id' => $value['id']
            );
            $appointmentSingle["event"]['from_time'] =  $value['from_time'];
            $appointmentSingle["event"]['to_time'] =  $value['to_time'];        
            array_push($appointmentSingle['date_time_list'], $temp);
        }
        return $appointmentSingle;
    }

}
