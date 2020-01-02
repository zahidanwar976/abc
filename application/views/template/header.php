<!-- <!DOCTYPE html> -->
<html>
<head>
	<title>My Blog</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public_html/assets/bootstrap.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public_html/assets/style.css') ?>">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url()?>home">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>posts">Blog</a>
      </li>
          <li class="nav-item pull-right">
        <a class="nav-link" href="<?php echo base_url()?>posts/add">Add Post</a>
      </li>
    </ul>
   <!--  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
<div class="container">