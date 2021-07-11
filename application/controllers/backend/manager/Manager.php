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

    public function allMember()
    {
        $data = $this->engine->store_nav('member', 'all_member', 'সকল সদস্য');
        $data['list'] = array();
        $path = 'backend/manager_part/all_member';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
    public function dailyMeal()
    {
        $data = $this->engine->store_nav('member', 'add_daily_meal', 'প্রতিদিনের মিল');
        $data['list'] = array();
        $path = 'backend/manager_part/add_daily_meal';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
    public function balanceManage()
    {
        $data = $this->engine->store_nav('member', 'balance_manage', ' টাকা জমা');
        $data['list'] = array();
        $path = 'backend/manager_part/balance_manage';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
    public function marketerList()
    {
        $data = $this->engine->store_nav('member', 'marketer_manage', 'বাজারকাড়ী');
        $data['list'] = array();
        $path = 'backend/manager_part/marketer_manage';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
    public function marketingCost()
    {
        $data = $this->engine->store_nav('member', 'marketing_cost', 'বাজার খরচ');
        $data['list'] = array();
        $path = 'backend/manager_part/marketing_cost';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
    public function anotherMarketCost()
    {
        $data = $this->engine->store_nav('member', 'another_marketing_cost', 'বিবিধ খরচ');
        $data['list'] = array();
        $path = 'backend/manager_part/another_marketing_cost';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
    public function noticeManage()
    {
        $data = $this->engine->store_nav('member', 'notice_manage', 'নোটিশ ম্যানেজ');
        $data['list'] = array();
        $path = 'backend/manager_part/notice_manage';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
    public function liveChat()
    {
        $data = $this->engine->store_nav('livechat', 'livechat', 'সরাসরি মেসেজ করুন');
        $path = 'backend/manager_part/live_chat';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
}
