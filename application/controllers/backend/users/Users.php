<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    private $main_layout = '';
    private $side_menu = '';


    public function __construct()
    {
        parent::__construct();
        $this->main_layout = 'backend/master_layout';
        $this->side_menu = 'backend/users/side_menu';
        $this->load->model('User');
    }

    public function mealInfo()
    {
        $data = $this->engine->store_nav('user', 'meal_list', 'মিলের তথ্য');
        $data['list'] = array();
        $path = 'backend/user_part/meal_list';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }

    public function marketerInfo()
    {
        $data = $this->engine->store_nav('user', 'marketer_list', 'বাজারকারীর তথ্য');
        $data['list'] = array();
        $path = 'backend/user_part/marketer_list';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }

    public function ammountInfo()
    {
        $data = $this->engine->store_nav('user', 'see_ammount', 'টাকা জমার পরিমান');
        $data['list'] = array();
        $path = 'backend/user_part/see_ammount';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }

    public function meetingInfo()
    {
        $data = $this->engine->store_nav('user', 'meeting_time', ' মিটিং শিডিউল');
        $data['list'] = array();
        $path = 'backend/user_part/meeting_time';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }

    public function marketCostInfo()
    {
        $data = $this->engine->store_nav('user', 'cost_marketing', 'বাজার খরচ');
        $data['list'] = array();
        $path = 'backend/user_part/cost_marketing';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }

    public function commentInfo()
    {
        $data = $this->engine->store_nav('user', 'comment', 'মতামত');
        $data['list'] = array();
        $path = 'backend/user_part/comment';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }

    public function mealControl()
    {
        $data = $this->engine->store_nav('user', 'meal_control', ' মিল কন্ট্রোল');
        $data['list'] = array();
        $path = 'backend/user_part/meal_control';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
}
