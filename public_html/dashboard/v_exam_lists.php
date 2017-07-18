<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="col-lg-9 col-md-9">
    <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Ujian
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Daftar Ujian</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
            <!--tables-->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Ujian</th>
                  <th>Tanggal Dibuat</th>
                  <th>Pembuat</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
                <tbody>
                    <?= @$table_src ?>
                </tbody>
                <tfoot>
                    <tr>
                  <th>Nama Ujian</th>
                  <th>Tanggal Dibuat</th>
                  <th>Pembuat</th>
                  <th>Tindakan</th>
                </tr>
                </tfoot>
              </table>
            </div>

            <!-- end of tables -->
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

