<?php

class Client extends MY_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('url', 'form'));

        $this->load->library(array('form_validation', 'CSVReader'));
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

        $filename = "client_info" . date('dmY_h_i_s') . ".csv";

        $file_handler = fopen('./uploads/' . $filename, 'w');

        $client_record[] = ['Name', 'Gender', 'Contact_type', 'Phone/Email', 'Address', 'Nationality', 'DOB', 'Education'];
        $client_record[] = $data;

        foreach ($client_record as $key => $value) {
            fputcsv($file_handler, $value);
        }

        fclose($file_handler);

        return redirect('client/view_info');
    }

    public function view_info() {
        $fileList = scandir('./uploads/');

        $clientData = [];
        foreach ($fileList as $filename) {
            if (!in_array($filename, ['.', '..'])) {
                array_push($clientData, $this->csvreader->parse_file('./uploads/' . $filename));
            }
        }
        $this->load->view('view_info', ["clientData" => $clientData]);
    }

}
