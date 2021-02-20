<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    public function email_exist()
    {
       # validation
       $this->load->library('form_validation');
       $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique|max_length[128]');
    }

}
