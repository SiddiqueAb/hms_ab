<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{
    private $main_layout = '';
    private $side_menu = '';
    private $logged_username = '';


    public function __construct()
    {
        parent::__construct();
        $this->main_layout = 'backend/master_layout';
        $this->side_menu = 'backend/administrator/side_menu';
        $this->logged_username =  $this->session->userdata('currentActiveId');
        $this->load->model('Common');
    }

    public function listMember()
    {
        $data = $this->engine->store_nav('member', 'member_list', 'সদস্য তালিকা');
        $path = 'backend/admin_part/list_member';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
       
    }
   public function product_data(){
		$data=$this->Common->getData('m_status', 'member');
		echo json_encode($data);
	}

    public function addNewMember()
    {
        $data = $this->engine->store_nav('member', 'add_member', 'নতুন সদস্য রেজিঃ');
        $data['list'] = array();
        $path = 'backend/admin_part/add_member';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }

    public function storeMember()
    {
        $memberInfo = array(
            'm_name' => $this->input->post('name'),
            'm_gurdian_name' => $this->input->post('gurdian_name'),
            'm_occupation' => $this->input->post('occupation'),
            'm_education' => $this->input->post('education'),
            'm_address' => $this->input->post('address'),
            'm_mobile' => $this->input->post('mobile'),
            'm_password' => $this->input->post('password'),
            'm_room_no' => $this->input->post('room_no'),
            'm_social_media' => $this->input->post('social_media'),
            'm_created_at' => get_current_time(),
            'm_created_by' => $this->logged_username,
            'm_status' => 1
        );
        
        $data = $this->Common->insertData('member', $memberInfo);
        echo json_encode($data);
    }

    public function updateMember()
    {
        $m_id = $this->input->post('edit_id');
        $memberInfo = array(
            'm_name' => $this->input->post('edit_name'),
            'm_gurdian_name' => $this->input->post('gurdian_name'),
            'm_occupation' => $this->input->post('occupation'),
            'm_education' => $this->input->post('education'),
            'm_address' => $this->input->post('address'),
            'm_mobile' => $this->input->post('mobile'),
            'm_password' => $this->input->post('password'),
            'm_room_no' => $this->input->post('room_no'),
            'm_social_media' => $this->input->post('social_media'),
            'm_updated_at' => get_current_time(),
            'm_updated_by' => $this->logged_username
        );
        
        $data = $this->Common->updateData('m_id', $m_id, 'member', $memberInfo);
        echo json_encode($data);
    }
    function deleteMember(){
        $id=$this->input->post('id');
		$data=$this->Common->delete_product('m_id', $id, 'member');

		echo json_encode($data);
	}

    public function memberFee()
    {
        $data = $this->engine->store_nav('member', 'decoration_fee', 'ডেকোরেশন ফি');
        $data['list'] = array();
        $data['memberinfo'] = $this->Common->getData('m_status', 'member');
        
        $path = 'backend/admin_part/decoration_fee';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
    public function managerControll()
    {
        $data = $this->engine->store_nav('member', 'manager_controll', 'ম্যানেজার সেট');
        $data['list'] = array();
        $path = 'backend/admin_part/manager_controll';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
    public function memberPasswordManage()
    {
        $data = $this->engine->store_nav('member', 'member_password_controll', 'সদস্য পাসওয়ার্ড পরিবর্তন');
        $data['list'] = array();
        $path = 'backend/admin_part/member_password_controll';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
    public function noticeControll()
    {
        $data = $this->engine->store_nav('member', 'notice_controll', 'নোটিশ কন্ট্রোল');
        $data['list'] = array();
        $path = 'backend/admin_part/notice_controll';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
    public function meetingShedule()
    {
        $data = $this->engine->store_nav('member', 'meeting_shedule', ' মিটিং শিডিউল');
        $data['list'] = array();
        $path = 'backend/admin_part/meeting_shedule';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
    public function frontEndControll()
    {
        $data = $this->engine->store_nav('member', 'frontend_controll', 'ফ্রন্ট ইন্ড');
        $data['list'] = array();
        $path = 'backend/admin_part/frontend_manage';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
}
