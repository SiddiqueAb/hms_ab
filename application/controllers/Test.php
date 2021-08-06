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
        $data = $this->M_test->getData('s_status', 'student');

        $ajaxData = '';
        $si = 1;

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
            's_update_at' => get_current_time(),
            's_update_by' => 2,
            's_status' => 1
        );

        // print_r($studentInfo);
        // $this->M_test->updateData('s_id', $id, 'student', $studentInfo);
        $data = $this->M_test->updateData('s_id', $id, 'student', $studentInfo);
        echo json_encode($data);
        // if ($this->M_test->updateData('s_id', $id, 'student', $studentInfo)) {
        //     echo 1;
        // } else {
        //     echo 0;
        // }
       
    }
}
