<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/pulse/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
  <script src="http://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">AP-Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>about">About</a>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
      <?php if($this->session->userdata('logged_in')) : ?>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>categories/create">Create Categories</a>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
      <?php endif; ?>
      <?php if(!$this->session->userdata('logged_in')) : ?>
          <a class="nav-item nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
          <a class="nav-item nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
      <?php endif; ?>
    </div>
      


  </div>
</nav>

<div class="container">
  
  <?php if($this->session->flashdata('user_registered')): ?>
    <?php echo '<p class = "alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('post_created')): ?>
    <?php echo '<p class = "alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('post_updated')): ?>
    <?php echo '<p class = "alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('category_created')): ?>
    <?php echo '<p class = "alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('post_deleted')): ?>
    <?php echo '<p class = "alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('login_failed')): ?>
    <?php echo '<p class = "alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('user_loggedin')): ?>
    <?php echo '<p class = "alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('user_loggedout')): ?>
    <?php echo '<p class = "alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
  <?php endif; ?>