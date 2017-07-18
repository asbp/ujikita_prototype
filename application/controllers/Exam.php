<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam extends CI_Controller {
    function __construct()  {
		parent::__construct();
		/*if(!empty($this->session->userdata('username'))) {
            $username = $this->session->userdata('username');
        }
        if(empty($this->session->userdata('username'))) redirect("login");*/
	}
    
    function _generate_random_choice($choice_object, $exam_num) {
        $i = 0;
        for($i=0;$i==3;$i++) {
            $j = rand(0,3);
            
        }
    }
    function index() {
        $code_input  = sha1($this->input->post("exam_code_input", TRUE));
        $current_url = $this->input->post("current_url", TRUE);
        $exam_id     = substr($current_url,-1);
        $code_actual = $this->db_model->read("*", "t_exams", "", array("exam_id"=>$exam_id,"exam_code"=>$code_input));
        
        if(count($code_actual)>0){
            $questions  = $this->db_model->read("*", "t_questions","", array("exam_id"=>$exam_id),"rand()");
            $categories = $this->db_model->read("*", "t_question_categories","","","rand()");
            $i=1;
            $j=1;
            $nav_src = "";
            $exam_questions = "";
            $exam_script = "";
            
            $exam_script = ";
                            $('.radio_').click(function(e) {
                                i+=1;
                                j = (i/".count($questions).")*100;
                                $('.pb-main').css('width',j+'%');
                            });
                            ";
            
            foreach($categories as $ret0) {
                $nav_src .= "<tr>";
                foreach($questions as $ret1) {
                    if($ret0->category_id===$ret1->question_category) {
                        if($i==1) $nav_src .= "<td colspan='3'>".$ret0->category_name ."</td></tr><tr>";
                        $nav_src .= "<td><a href='#' name='btn-q' class='btn btn-default btn-flat form-control btn-q' id='open-q".$j."'>".$j."</a></td>";
                        $exam_script    .= "$('.question').hide();
                                            $('.question-number-1').show();
                                            $('#open-q".$j."').click(function(e) {
                                                $('.question').hide();
                                                $('.question-number-".$j."').show();
                                                $('.btn-q').attr('class','btn btn-default btn-flat form-control');
                                                $('#open-q".$j."').attr('class','btn bg-blue btn-flat form-control');
                                            });
                                            $('.radio-".$j."').click(function(e) {
                                                $('#open-q".$j."').attr('class','btn btn-success btn-flat form-control');
                                            });
                                            
                                            ";
                        $exam_questions .= "<div class=\"col-lg-12 question question-number-".$j." question-id-".$ret1->question_id."\">
                                                <div class=\"col-lg-12\">
                                                    <blockquote>".$ret1->question_text."</blockquote>
                                                </div>
                                                <div class=\"col-lg-12\">
                                                     <div class=\"funkyradio\">
                                                        <div class=\"funkyradio-primary\">
                                                            <input type=\"radio\" name=\"radio-".$j."\" class=\"radio_ radio-".$j."\" id=\"radio-".$j."-1\" value=\"A\"/>
                                                            <label for=\"radio-".$j."-1\">".$ret1->question_choiceA."</label>
                                                        </div>
                                                        <div class=\"funkyradio-primary\">
                                                            <input type=\"radio\" name=\"radio-".$j."\" class=\"radio_ radio-".$j."\" id=\"radio-".$j."-2\" value=\"B\"/>
                                                            <label for=\"radio-".$j."-2\">".$ret1->question_choiceB."</label>
                                                        </div>
                                                          <div class=\"funkyradio-primary\">
                                                            <input type=\"radio\" name=\"radio-".$j."\" class=\"radio_ radio-".$j."\" id=\"radio-".$j."-3\" value=\"C\"/>
                                                            <label for=\"radio-".$j."-3\">".$ret1->question_choiceC."</label>
                                                        </div>
                                                        <div class=\"funkyradio-primary\">
                                                            <input type=\"radio\" name=\"radio-".$j."\" class=\"radio_ radio-".$j."\" id=\"radio-".$j."-4\" value=\"D\"/>
                                                            <label for=\"radio-".$j."-4\">".$ret1->question_choiceD."</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>";
                        $i++; $j++;
                    }
                }
                $i=1;
                $nav_src .= "</tr>";
            }
            
            $data['nav_src'] = $nav_src;
            $data['exam_questions'] = $exam_questions;
            $data['exam_script'] = $exam_script;
            $data['title']="UjiKita - Sedang Mengerjakan Ulangan";
            $data['view'] = "exams/v_exam_main";
            $data['exam_title'] = $code_actual[0]->exam_name;
            $data['is_exam'] = true;
            $this->load->view('index',$data);
        } else {
            redirect($current_url);
        }
    }
}
