<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_Post_Controller extends CI_Controller {
    
       // Show view Page
        public function index(){
            $this->load->view("ajax_post_view");
        }
	
        // This function call from AJAX
	public function submit()	{
                $data = array(
                    'username' => $this->input->post('name'),
                    'pwd'=>$this->input->post('pwd')
                        );
	        echo json_encode($data);
	}
}
