<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_controller extends CI_Controller
{
    public function index()
    {
        $this->load->helper('form');

        $this->load->view('templates/header');
        $this->load->view('password/forgot-password');
        $this->load->view('templates/footer');
    }

    public function reset_password()
    {
        $this->load->model('auth_model');
        if ($this->auth_model->email_exist() === 0) {
            # email not exist
            $this->session->set_flashdata('email_not_found', 'Email not found in the database.');
            $this->index();
        }

        # email exist, then send email and token
        if ($this->auth_model->send_reset_pass_email()) {
            # email sent successfully
            $this->session->set_flashdata('email_sent', 'Email sent :)');
            $this->index();
        } else {
            # error occured
            die('server error retry later');
        }
    } # end

    public function reset_password_form($email, $token)
    {
        if (isset($email, $token)) {
            if ($token === $this->security->get_csrf_hash()) {
                # redirect to password chage view
                redirect(base_url('cp'));
            } else {
                $this->session->set_flashdata('token_expired', 'Your token is expired. Be more fast !!! ;)');
                $this->index();
            }
        }
        die('error');
    } # end

    public function change_password()
    {
        $this->load->helper('form');

        $this->load->view('templates/header');
        $this->load->view('password/change-password');
        $this->load->view('templates/footer');
    } # end

    public function update_password()
    {
        $this->load->model('auth_model');
        if ($this->auth_model->update_password()) {
            # update ok
            $this->session->set_flashdata('pass_recovery_success', 'Password recovered. log in now');
            redirect(base_url('up'));
        }
        redirect(base_url('up'));
    } # end
}
