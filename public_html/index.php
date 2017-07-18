<?php
    $data['title'] = $title;
    $data['current_url'] = current_url();
	$this->load->view('template/v_header',$data);
    ?> <div class="col-lg-12">&nbsp;</div> <?php
    if(@$is_exam==true) $this->load->view('navigations/v_nav_exam',$data); else $this->load->view('navigations/v_nav_home',$data);
	$this->load->view($view);
	$this->load->view('template/v_footer',$data);
    if(@$is_exam==true) $this->load->view('template/v_footer_exam_script',$data); else $this->load->view('template/v_footer_dashboard_script',$data);
    $this->load->view('template/v_veryfooter',$data);