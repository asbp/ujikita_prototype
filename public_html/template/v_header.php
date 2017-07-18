<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= @$title?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="<?php echo base_url("media")?>/bootstrap/css/bootstrap.min.css" rel="Stylesheet" type="text/css" />
  <link href="<?php echo base_url("media")?>/custom_styles/styles.css" rel="Stylesheet" type="text/css" />
  <link href="<?php echo base_url("media")?>/custom_styles/funkyradio.css" rel="Stylesheet" type="text/css" />
  <link href="<?php echo base_url("media")?>/font-awesome/css/font-awesome.min.css" rel="Stylesheet" type="text/css" />
  <link href="<?php echo base_url("media")?>/datatables/dataTables.bootstrap.css" rel="Stylesheet" type="text/css" />
  <!-- Theme Style -->
  <link href="<?php echo base_url("media")?>/admin-lte/css/AdminLTE.min.css" rel="Stylesheet" type="text/css" />
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url("media")?>/admin-lte/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-boxed">
<div class="wrapper" >