<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'frontend';

// admin part 
$route['member_list'] = 'backend/administrator/Administrator/listMember';
$route['add_member'] = 'backend/administrator/Administrator/addNewMember';
$route['decoration_fee'] = 'backend/administrator/Administrator/memberFee';
$route['manager_controll'] = 'backend/administrator/Administrator/managerControll';
$route['member_password_controll'] = 'backend/administrator/Administrator/memberPasswordManage';
$route['notice_controll'] = 'backend/administrator/Administrator/noticeControll';
$route['meeting_shedule'] = 'backend/administrator/Administrator/meetingShedule';
$route['frontend_controll'] = 'backend/administrator/Administrator/frontEndControll';
$route['storeMember'] = 'backend/administrator/Administrator/storeMember';
$route['updateMember'] = 'backend/administrator/Administrator/updateMember';
$route['product_data'] = 'backend/administrator/Administrator/product_data';
$route['deleteMember'] = 'backend/administrator/Administrator/deleteMember';

// manager part 
$route['all_member'] = 'backend/manager/Manager/allMember';
$route['add_daily_meal'] = 'backend/manager/Manager/dailyMeal';
$route['balance_manage'] = 'backend/manager/Manager/balanceManage';
$route['marketer_manage'] = 'backend/manager/Manager/marketerList';
$route['marketing_cost'] = 'backend/manager/Manager/marketingCost';
$route['another_marketing_cost'] = 'backend/manager/Manager/anotherMarketCost';
$route['notice_manage'] = 'backend/manager/Manager/noticeManage';
$route['liveChat'] = 'backend/manager/Manager/liveChat';

// reguler user part 
$route['meal_list'] = 'backend/users/Users/mealInfo';
$route['marketer_list'] = 'backend/users/Users/marketerInfo';
$route['see_ammount'] = 'backend/users/Users/ammountInfo';
$route['meeting_time'] = 'backend/users/Users/meetingInfo';
$route['cost_marketing'] = 'backend/users/Users/marketCostInfo';
$route['comment'] = 'backend/users/Users/commentInfo';
$route['meal_control'] = 'backend/users/Users/mealControl';


// authority 
$route['manager'] = 'backend/authority/Manager';
$route['users'] = 'backend/authority/Users';
$route['administrator'] = 'backend/authority/Administrator';

// login system 
$route['login'] = 'backend/login/Login';
$route['logout'] = 'backend/login/Login/user_logout';


//test
$route['ajax_loda_data'] = 'Test/ajaxLoadData';
$route['insert_data'] = 'Test/insertData';
$route['delelteData'] = 'Test/delelteData';
$route['getFromValue'] = 'Test/getFromValue';
$route['updateData'] = 'Test/updateData';
$route['liveSearch'] = 'Test/liveSearch';
$route['testCookie'] = 'Test/testCookie';
//end test

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
