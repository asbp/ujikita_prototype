<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UI_model extends CI_Model {
    public function drawisOpenedBadge($exam_id) {
        if($exam_id==1) return "<span class=\"badge bg-gray\"><i style='display:none'>_</i>bawaan sistem</span>";
        
        $list = $this->db_model->read("exam_open","t_exams","",array("exam_id"=>$exam_id));
        $ret  = $list[0]->exam_open;
        //$out  = "";
        
        if($ret==0) return "<span class=\"badge bg-red\">belum dibuka</span>"; else return "<span class=\"badge bg-green\">sudah dibuka</span>";
    }
    public function throw_404() {
        $data['title']                  = "UjiKita - 404 Page Not Found";
        $data['view']                   = "error_sign/v_error_404";
        $this->load->view('index',$data);
    }
}