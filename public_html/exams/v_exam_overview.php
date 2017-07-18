<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="col-lg-9 col-md-9">
    <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rincian Ujian
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url()."exam_lists" ?>">Daftar Ujian</a></li>
        <li><a href="#"><?= $exam_title ?></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
            <div class="col-lg-6">
                <div class="callout callout-success">
                <h4><?= $exam_title ?><?= (@$exam_id==1?"<span class=\"badge bg-gray pull-right\">bawaan sistem</span>":"") ?></h4>
                <blockquote class="font-small">Dibuat pada <?= $exam_created ?> oleh <?= $exam_author ?><br>Perubahan terakhir: <?= $exam_modifided ?></blockquote>
                <p><?php echo @$exam_description?@$exam_description:"No description available." ?></p>
              </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-5">
                  <div class="small-box bg-blue">
                    <div class="inner">
                      <h3><?= $exam_total_questions ?></h3>
                      <p>Jumlah Soal</p>
                        <div class="icon">
                            <i class="fa fa-question-circle"></i>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="small-box bg-orange">
                    <div class="inner">
                      <h3><?= $exam_minute_alloc ?></h3>
                      <p>Wkt. Pengerjaan (menit)</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                <div class="callout callout-danger">
                    <p><i class="fa fa-warning">&nbsp;</i>Masukkan kode soal untuk melanjutkan.</p>
                    <form action="<?= base_url("exam") ?>" method="post">
                        <div class="input-group">
                            <input type="hidden" name="current_url" value="<?= current_url() ?>">
                          <input type="text" name="exam_code_input" placeholder="Masukkan kode soal di sini." class="form-control" required>
                              <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary btn-flat">Masukkan</button>
                              </span>
                        </div>
                    </form>
                     <span class="badge bg-red"><?= @$error ?></span>
                </div>
            </div>
            </div>
            
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          (C) 2017 Agung Satrio
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
</div>