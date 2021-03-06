<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="jspreddy">

    <title>ITSAJ</title>

    <link href="<?php echo base_url('/ui/css/bootstrap.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('/ui/css/bootstrap-theme.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('/ui/css/style.css'); ?>" rel="stylesheet" />

    <script src="<?php echo base_url('/ui/js/jquery-1.11.2.min.js'); ?>"></script>
    <script src="<?php echo base_url('/ui/js/jquery-1.11.2.min.map'); ?>"></script>
    <script src="<?php echo base_url('/ui/js/bootstrap.js'); ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div class="header">
        <div class="container">
            <img class="headerBG" src="<?php echo base_url("/ui/img/titleBG.png"); ?>" />
        </div>
    </div>
    <?php $this->load->view('component/nav.php'); ?>
    <div class="container">