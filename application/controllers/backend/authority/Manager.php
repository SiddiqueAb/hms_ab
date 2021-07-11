<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manager extends CI_Controller
{
    private $main_layout = '';
    private $side_menu = '';


    public function __construct()
    {
        parent::__construct();
        $this->main_layout = 'backend/master_layout';
        $this->side_menu = 'backend/manager/side_menu';
        $this->load->model('User');
    }

    public function index()
    {
        $data = $this->engine->store_nav('dashboard', 'Nothing', 'Welcome to dashboard');
        $data['container_data'] = 'Hello';
        $path = 'backend/manager/dashboard';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
}
