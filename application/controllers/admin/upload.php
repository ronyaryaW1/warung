<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Controller
{
    
    public function index()
    {
    	$this->load->view('admin/pkl');
    	$this->load->view('admin/upload-pkl');
    }
    
}
