<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo("charset")?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <!-- <link rel="stylesheet" href="./about.html"> -->
    <!-- <link rel="stylesheet" href="./loader.css"> -->
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.1/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid" id="header">

  <?php if ( function_exists( 'groovy_menu' ) ) { groovy_menu(); } ?>
 
</div>