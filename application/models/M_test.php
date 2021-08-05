<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_test extends CI_Model
{
    function getData($status, $table)
    {
        $this->db->where($status, '1');
        return $this->db->get($table);
    }

    function deleteData($db_id, $id, $table)
    {

        $this->db->where($db_id, $id);
        return $this->db->delete($table);
    }
}
