<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fibonacci extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('fibonacci_m');
    }

    public function index(){

        $data['subview'] = 'index_n';
        $this->load->view('_fibonacci_layout', $data);
    }

    public function request($index_n = -1){

        $fibonacci_index = $index_n > -1 ? $index_n : $this->input->post('input_index_n');

        $result_fibonacci = $this->fibonacci_m->calculate_fibonacci_serie($fibonacci_index);

        if($index_n > -1 ){
            echo $result_fibonacci;
        }
        else{

            $data['result_fibonacci'] = $result_fibonacci;
            $data['subview'] = 'fibonacci_response';
            $this->load->view('_fibonacci_layout', $data);
        }
    }
}

/* End of file fibonacci.php */
/* Location: ./application/controllers/Fibonacci.php */