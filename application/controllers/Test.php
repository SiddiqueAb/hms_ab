<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{
    private $main_layout = '';
    private $side_menu = '';


    public function __construct()
    {
        parent::__construct();
        $this->main_layout = 'backend/master_layout';
        $this->side_menu = 'backend/test/side_menu';
    }

    public function index()
    {
        $data = $this->engine->store_nav('test', 'test', 'Test');
        $path = 'test';

        // $data = $this->M_test->getData('m_status', 'member');
        // echo $this->db->affected_rows();
        // x_debug($data);
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }

    public function ajaxLoadData()
    {

        $limit_per_page = 3;
        $page = "";
        $page_no = $this->input->get('page_no');
        if (isset($page_no)) {
            $page = $this->input->get('page_no');
        } else {
            $page = 1;
        }


        $offset = ($page - 1) * $limit_per_page;
        $data = $this->M_test->ajaxPagination($offset, $limit_per_page);

        // $total_record = count($this->M_test->getData('s_status', 'student')->result);
        // x_debug($data->result());
        $ajaxData = '';
        $si = $offset + 1;
        // $total_page = ceil($total_record / $limit_per_page);
        if ($this->db->affected_rows() > 0) {

            foreach ($data->result() as $row) {

                $ajaxData .= "<tr>
                        <td>{$si}</td>
                        <td>{$row->s_name}</td>                        
                        <td>{$row->s_roll}</td>                        
                        <td>{$row->s_class}</td>                        
                        <td><button type='button' class='btn btn-xs btn-success edit_button' data-eid='{$row->s_id}'>Edit</button></td>                        
                        <td><button type='button' class='btn btn-xs delete_button btn-danger' data-id='{$row->s_id}'>Delete</button></td>                        
                        </tr>";
                $si++;
            }

            // $ajaxData .= "<div class='container'>
            //             <ul class='pagination' id='pagination'>";


            // for ($i = 1; $i <= $total_page; $i++) {
            //     $ajaxData .= "<li><a id='{$i}' href=''>{$i}</a></li>";
            // }

            // $ajaxData .= "</ul></div>";
            echo $ajaxData;
        } else {
            echo "No Record Found";
        }
    }

    public function insertData()
    {


        $memberInfo = array(
            's_name' => $this->input->post('name'),
            's_roll' => $this->input->post('roll'),
            's_class' => $this->input->post('class_c'),
            's_created_at' => get_current_time(),
            's_created_by' => 2,
            's_status' => 1
        );

        $this->Common->insertData('student', $memberInfo);
    }

    public function delelteData()
    {
        $id = $this->input->post("s_id");
        if ($this->M_test->deleteData('s_id', $id, "student")) {
            echo 1;
        } else {
            echo 0;
        }
    }

    public function getFromValue()
    {
        $st_id = $this->input->post('s_id');

        $row = $this->M_test->get_row_data_multi_conditional(['s_id' => $st_id], "student");
        $ajaxData = "<div class='col-sm-12 mt-2'>
                    <input type='text' id='nameUpdate' value='{$row->s_name}' class='form-control'>
                    <input type='hidden' id='s_id' value='{$row->s_id}'>
                </div>
                <div class='col-sm-12 mt-2'>
                    <input type='text' id='rollUpdate' value='{$row->s_roll}' class='form-control'>
                </div>
                <div class='col-sm-12 mt-2'>
                    <input type='text' id='class_cUpdate' value='{$row->s_class}' class='form-control'>
                </div>
                <button type='button' class='btn btn-primary mt-4' id='updateButton'>Save changes</button>
                ";

        echo $ajaxData;
    }
    public function updateData()
    {

        $id = $this->input->post('id');
        $studentInfo = array(
            's_name' => $this->input->post('name2'),
            's_roll' => $this->input->post('roll2'),
            's_class' => $this->input->post('class_c2'),
            's_updated_at' => get_current_time(),
            's_updated_by' => 2,
            's_status' => 1
        );

        if ($this->M_test->updateDataAjax('s_id', $id, 'student', $studentInfo)) {
            echo 0;
        } else {
            echo 1;
        }
    }

    public function liveSearch()
    {
        $searchItem = $this->input->post('search');
        // $data = $this->M_test->search_data_multi_conditional('student', ["s_name" => $searchItem, "s_roll" => $searchItem, "s_class" => $searchItem]);
        $data = $this->M_test->search_data_multi_conditional('s_status', 'student', $searchItem);
        $ajaxFilterData = '';
        $si = 1;

        if ($this->db->affected_rows() > 0) {

            foreach ($data->result() as $row) {

                $ajaxFilterData .= "<tr>
                        <td>{$si}</td>
                        <td>{$row->s_name}</td>                        
                        <td>{$row->s_roll}</td>                        
                        <td>{$row->s_class}</td>                        
                        <td><button type='button' class='btn btn-xs btn-success edit_button' data-eid='{$row->s_id}'>Edit</button></td>                        
                        <td><button type='button' class='btn btn-xs delete_button btn-danger' data-id='{$row->s_id}'>Delete</button></td>                        
                        </tr>";
                $si++;
            }
            echo $ajaxFilterData;
        } else {
            echo "No Record Found";
        }
    }

    public function ajaxPagination()
    {

        $limit_per_page = 4;
        $page = "";
        $page_no = $this->input->post('page_no');
        if (isset($page_no)) {
            $page = $this->input->post('page_no');
        } else {
            $page = 1;
        }

        $offset = ($page - 1) * $limit_per_page;
        $data = $this->M_test->ajaxPagination("s_status", $offset, $limit_per_page, "student");

        $ajaxPagination = '';
        $si = 1;

        if ($this->db->affected_rows() > 0) {
            $ajaxPagination .= "";
            foreach ($data->result() as $row) {

                $ajaxPagination .= "<ul class='pagination' id='pagination'>
                    <li><a id='1' href='#'>1</a></li></ul>";
                $si++;
            }

            $ajaxPagination .= "";
            echo $ajaxPagination;
        } else {
            echo "No Record Found";
        }
    }


    public function testCookie()
    {
        $cookie = array(

            'name'   => 'remember_me',
            'value'  => 'test',
            'expire' => '300',
            'secure' => TRUE

        );

        $this->input->set_cookie($cookie);
    
        echo $this->input->cookie('remember_me', true);
        $this->input->delete_cookie($cookie); 
        // $this->input->delete('remember_me');
    }
}
