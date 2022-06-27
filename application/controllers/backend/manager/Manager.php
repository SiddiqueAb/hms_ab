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
		// $data["all_friend"] = $this->Common->getData("status", "authority");
		$data["all_friend"] = $this->Common->get_data_multi_conditional("authority", ["status" => 1]);
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
		$this->Common->set_data('massage', $massage_array);
	}


	public function show_massege()
	{
		// $message =  $this->Common->getData("m_status", "massage");
		$message =  $this->Common->get_data_multi_conditional("massage", ["m_status" => 1]);
		// x_debug($message);
		if ($message) {
			foreach ($message->result() as $row) { ?>

				<div class="d-flex justify-content-end mb-4">
					<div class="msg_cotainer_send">
						<?= $row->m_title ?>
						<!-- <span class="msg_time_send">9:10 AM, Today</span> -->
					</div>
					<div class="img_cont_msg">
						<img src="assets/uploads/profile_pic/31.jpg" class="rounded-circle user_img_msg">
					</div>
				</div>
				<div class="d-flex justify-content-start mb-4">
					<div class="img_cont_msg">
						<img src="assets/uploads/image/logo/logo.png" class="rounded-circle user_img_msg">
					</div>
					<div class="msg_cotainer">
						<?= $row->m_title ?>
						<!-- <span class="msg_time">9:12 AM, Today</span> -->
					</div>
				</div>
		<?php }
		}
	}




	public function id_wise_data_show()
	{
		$user = $this->input->post("user_id");
		// $name = $this->Common->get_row_data_multi_conditional(["id" => $user], "authority");
		$name = $this->Common->get_single_row_information_multi_condition("authority", ["id" => $user]);
		?>
		<div class="card-header msg_head">
			<div class="d-flex bd-highlight">
				<div class="img_cont">
					<img src="assets/uploads/image/logo/logo.png" class="rounded-circle user_img">
					<span class="online_icon"></span>
				</div>
				<div class="user_info">
					<span><?= $name->a_name; ?></span>
					<p>1767 Messages</p>
				</div>
				<div class="video_cam">
					<span><i class="fas fa-video"></i></span>
					<span><i class="fas fa-phone"></i></span>
				</div>
			</div>
			<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
			<div class="action_menu">
				<ul>
					<li><i class="fas fa-user-circle"></i> View profile</li>
					<li><i class="fas fa-users"></i> Add to close friends</li>
					<li><i class="fas fa-plus"></i> Add to group</li>
					<li><i class="fas fa-ban"></i> Block</li>
				</ul>
			</div>
		</div>
		<div class="card-body msg_card_body" id="massage_card_body">


		</div>
		<div class="card-footer">
			<form role="form" action="<?= base_url("message_send") ?>" method="post">
				<div class="input-group">
					<div class="input-group-append">
						<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
					</div>
					<textarea name="" id="messege_input" class="form-control type_msg" placeholder="Type your message..."></textarea>
					<div class="input-group-append">
						<span class="input-group-text send_btn" id="send_btn"><i class="fas fa-location-arrow"></i></span>
					</div>
				</div>
			</form>
		</div>
<?php }
}
