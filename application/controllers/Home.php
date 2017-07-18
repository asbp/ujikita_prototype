<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct()  {
		parent::__construct();
		if(current_url()==base_url()."home/exam_lists") redirect(base_url()."exam_lists");
		if(current_url()==base_url()."home/exam_scores") redirect(base_url()."exam_scores");
		if(current_url()==base_url()."home/help") redirect(base_url()."help");
		if(current_url()==base_url()."home/view_exam") redirect(base_url()."exam_lists");
        
		/*if(!empty($this->session->userdata('username'))) {
            $username = $this->session->userdata('username');
        }
        if(empty($this->session->userdata('username'))) redirect("login");*/
	}
    
	public function index() {
        $data['title']="UjiKita - Beranda";
        $data['view'] = "dashboard/v_dashboard";
		$this->load->view('index',$data);
	}
    
    public function exam_lists() {
        $list = $this->db_model->read("*","t_exams");
        $list_out="";
        
        foreach($list as $rows) {
            $list_out .= "<tr>";
            $list_out .= "<td>"."<span class=\"badge bg-blue\">baru</span>&nbsp;".$this->UI_model->drawisOpenedBadge($rows->exam_id)."&nbsp;".$rows->exam_name."</td>";
            $list_out .= "<td>".$rows->exam_created."</td>";
            $list_out .= "<td>".$rows->exam_author."</td>";
            $list_out .= "<td>"."<a href=\"".base_url()."exam_overview/".$rows->exam_id."\" class=\"btn btn-success btn-flat ".($rows->exam_open==0?"disabled":"")." \"><i class=\"fa fa-arrow-right\">&nbsp;</i>Ikuti</a>"."</td>";
            $list_out .= "</tr>";
        }
        
        $data['table_src'] = $list_out;
        $data['title']="UjiKita - Daftar Ujian";
        $data['view'] = "dashboard/v_exam_lists";
		$this->load->view('index',$data);
    }        
    
    public function exam_scores() {
        $data['title']="UjiKita - Daftar Nilai Ujian";
        $data['view'] = "dashboard/v_exam_scores";
		$this->load->view('index',$data);
    }        
    
    public function help() {
        $data['title']="UjiKita - Bantuan";
        $data['view'] = "dashboard/v_help";
		$this->load->view('index',$data);
    }    
    
    public function view_exam($id) {
        $counts = $this->db_model->read("*","t_exams","",array("exam_id"=>$id));
        
        if(count($counts)>0) {
            $details = $counts[0];
            
            if($details->exam_open==0) {
                $this->UI_model->throw_404();
                return;
            }
            
            $data['exam_id']                = $id;
            $data['exam_title']             = $details->exam_name;
            $data['exam_description']       = $details->exam_description;
            $data['exam_created']           = $details->exam_created;
            $data['exam_modifided']         = $details->exam_modifided;
            $data['exam_author']            = $details->exam_author;
            $data['exam_minute_alloc']      = $details->exam_minute_alloc;
            $data['exam_total_questions']   = $this->db_model->count_results("t_questions",array("exam_id"=>$id));
            $data['title']                  = "UjiKita - Rincian Ujian: \"".$details->exam_name."\" ";
            $data['view']                   = "exams/v_exam_overview";
            $this->load->view('index',$data);
        } else {
           $this->UI_model->throw_404();
        }
    }
}
