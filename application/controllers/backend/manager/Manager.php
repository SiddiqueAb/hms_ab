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
    public function liveChat_ultra()
    {
        $data = $this->engine->store_nav('livechat', 'livechat', 'সরাসরি মেসেজ করুন');
        $path = 'backend/manager_part/live_chat';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
    public function liveChat()
    {
        $data = $this->engine->store_nav('livechat', 'livechat', 'সরাসরি মেসেজ করুন');
        $data["all_friend"]= $this->Common->getData("status", "authority");
        $path = 'backend/manager_part/live_chat_myself';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
    public function send_massege()
    {
        $massage_test = $this->input->post("text");

        $massage_array = [
            "m_time" => get_current_time(),
            "m_title" => $massage_test,
            "m_sender_id" => 2,
            "m_recever_id" => 1,
            "m_status" => 1,
        ];
        $this->Common->insertData('massage', $massage_array);
    }


    public function show_massege()
    {
        $message =  $this->Common->getData("m_status", "massage");
        // x_debug($message);
        if ($message) {
            foreach ($message as $row) { ?>

                <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send">
                        <?= $row->m_title ?>
                        <!-- <span class="msg_time_send">9:10 AM, Today</span> -->
                    </div>
                    <div class="img_cont_msg">
                        <img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img_msg">
                    </div>
                </div>
                <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                        <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                    </div>
                    <div class="msg_cotainer">
                        <?= $row->m_title ?>
                        <!-- <span class="msg_time">9:12 AM, Today</span> -->
                    </div>
                </div>
<?php }
        }
    }
}
