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
            <div class="box-body no-padding">
                <div class="col-lg-12">&nbsp;</div>
                <div class="col-lg-12">
                    <div class="callout callout-success">
                        <div class="progress progress-md active no-bottom-margin">
                            <div class="progress-bar progress-bar-info progress-bar-striped pb-main" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: "<?= @$progress_value ?>"%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                          <h3 class="box-title">Navigasi Soal</h3>
                        </div>
                        <div class="box-body y-scroll-qnjavs">
                            <table class="table">
                                <tbody>
                                    <?= $nav_src ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
              <div class="box-footer">
                 <a href="#" class="btn btn-danger btn-flat pull-right">Logout</a>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
</div>