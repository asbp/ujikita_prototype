<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="col-lg-9 col-md-9">
    <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= @$exam_title ?>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title exam_number">Soal 15 dari 10</h3>
        </div>
        <div class="box-body">
            <?= $exam_questions ?>
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