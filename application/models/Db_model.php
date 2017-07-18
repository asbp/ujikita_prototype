<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class db_model extends CI_Model {
	function create($table, $data) {
		// Bentuk Umum: $this->db->insert("nama_tabel", $data);
		$this->db->insert($table,$data);
	}
 
	function read($select, $table, $table2="", $where="", $order="", $fkey="",$containsDataTables=false) {
		if ( !empty($where) ) $this->db->where($where);
		if ( !empty($order) ) $this->db->order_by($order,'desc');
        
		$this->db->distinct();
        $this->db->select($select);
        if(!empty($table2)&&!empty($fkey)) $this->db->join($table2, $fkey);
        
		$query = $this->db->get($table);
		if ($query AND $query->num_rows() != 0) {
			return $query->result();
		} else {
			return array();
		}
	}
    
    function count_results($table, $where) {
        $lists = $this->db_model->read("*", $table, "", $where);
        return count($lists);
    }
	
	function update($table, $where, $data) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	
	function delete($table, $where) {
		$this->db->where($where);
		$this->db->delete($table);		
	}
}