<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index() {
        if (!$this->auth_user->is_connected) {
            redirect('index');
        }
        $data["title"] = "Panneau de configuration";

        $this->load->view('common/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('common/footer', $data);
    }
}