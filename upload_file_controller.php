<?php

class Upload_file_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index()
    {
        $this->load->view('upload_file_view', array('error' => ' ' ));
    }

    function do_upload()
    {
        $config['upload_path'] = "C:\wamp64\www\ci-fileupload\upload";
        $config['allowed_types'] = 'jpg|jpeg|JPG|gif|png';
        $config['max_size']    = '1000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
		$config['overwrite'] = TRUE;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_file_view', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('upload_success_view', $data);
        }
    }
     
}
?>

