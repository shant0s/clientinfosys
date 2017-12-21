<?php

class Client extends MY_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('url', 'form'));

        $this->load->library('form_validation');
    }

    public function index() {
//        $this->form_validation->set_error_delimiters();
//        if($this->form_validation->run()){
//            
//        }else{
//            $this->load->view('client_info');
//        }
        $this->load->view('client_info');
    }

    public function client_info() {
        $data = $this->input->post();
        unset($data['submit']);
        
//        echo "<pre>";
//        print_r($data);
//        exit;
        
        $filename = "client_info".date('dmy_h:i:s').".csv";
        
        header('Content-Type: text/csv');
        header('Content-Disposition: attachement;filename='.$filename);
        
        $file = fopen('php://output', 'w');
        
        $client_record[] = ['Fullname', 'Gender', 'Contact-Type', 'Phone/Email', 'Address', 'Nationality', 'Date of Birth', 'Education'];
        
        $client_record[] = $data;
        
        foreach($client_record as $key => $value){
            fputcsv($file, $value);
        }
        
        fclose($file);
        
        
    }

}
