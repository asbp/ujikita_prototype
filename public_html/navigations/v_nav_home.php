<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-lg-3 col-md-3">
    <div class="col-lg-12 col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue">
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo base_url("media")?>/admin-lte/img/user7-128x128.jpg" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Admin</h3>
              <h5 class="widget-user-desc">Lead Developer</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked nav-main">
                <li class="<?php echo current_url()==base_url()?"active":"" ?>"><a href="<?=base_url()?>"><i class="fa fa-home">&nbsp;&nbsp;</i>Beranda</a></li>
                <li class="<?php echo current_url()==base_url()."exam_lists"?"active":"" ?>"><a href="<?=base_url()."exam_lists"?>"><i class="fa fa-book">&nbsp;&nbsp;</i>Ujian</a></li>
                <li class="<?php echo current_url()==base_url()."exam_scores"?"active":"" ?>"><a href="<?=base_url()."exam_scores"?>"><i class="fa fa-bar-chart">&nbsp;&nbsp;</i>Hasil</a></li>
                <li class="<?php echo current_url()==base_url()."help"?"active":"" ?>"><a href="<?=base_url()."help"?>"><i class="fa fa-question">&nbsp;&nbsp;</i>Bantuan</a></li>
              </ul>
            </div>
              <div class="box-footer">
                 <a href="#" class="btn btn-danger btn-flat pull-right">Logout</a>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
</div>