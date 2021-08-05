<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Common extends CI_Model
{
  function insertData($table, $data)
  {
    $this->db->insert($table, $data);
  }

  function getData($status, $table)
  {
    $this->db->where($status, '1');
    return $this->db->get($table)->result();
  }
  function updateData($p_id_column, $p_id, $table, $data)
  {
    $this->db->where($p_id_column, $p_id);
    $this->db->update($table, $data);
  }

  function delete_product($db_id, $id, $table)
  {

    $this->db->where($db_id, $id);
    return $this->db->delete($table);
  }


  function get_row_data_multi_conditional($data, $table)
  {
    $this->db->where($data);
    $query = $this->db->get($table);
		if ($this->db->affected_rows() > 0) {
			return $query->row();
		} else {
			return FALSE;
		}
  }
}
