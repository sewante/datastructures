<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo TITLE; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<body>
<div class="main">
  <div class="main_resize">
    <div class="header">
      <div class="logo">
        <h1><a href="#"><span>CSC</span> 2100<small>Data Sructures and Algorithms</small></a></h1>
      </div>
      <div class="search">
        <form method="get" id="search" action="#">
          <span>
          <input type="text" placeholder="Search..." name="search" id="s" />
          <input name="searchsubmit" type="image" src="images/search.gif" value="Go" id="searchsubmit" class="btn"  />
          </span>
        </form>
        <!--/searchform -->
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
			<?php
			if (defined('PAGE')) {
				switch (PAGE) {
				case 'home':
					echo '<li class="active"><a href="index.php">Home</a></li>' .
						 '<li><a href="blog.php">Blog</a></li>' .
						 '<li><a href="about.php">About Us</a></li>' .
						 '<li><a href="contact.php">Contact Us</a></li>';
					break;
				case 'about':
					echo '<li><a href="index.php">Home</a></li>' .
						 '<li><a href="blog.php">Blog</a></li>' .
						 '<li class="active"><a href="about.php">About Us</a></li>' .
						 '<li><a href="contact.php">Contact Us</a></li>';
					break;
				case 'blog':
					echo '<li><a href="index.php">Home</a></li>' .
						 '<li class="active"><a href="blog.php">Blog</a></li>' .
						 '<li><a href="about.php">About Us</a></li>' .
						 '<li><a href="contact.php">Contact Us</a></li>';
					break;
				case 'contact':
					echo '<li><a href="index.php">Home</a></li>' .
						 '<li><a href="blog.php">Blog</a></li>' .
						 '<li><a href="about.php">About Us</a></li>' .
						 '<li class="active"><a href="contact.php">Contact Us</a></li>';
					break;
				default:
					// Do noting.
					break;
				}
			}
			else {
				echo '<li><a href="index.php">Home</a></li>' .
					 '<li><a href="blog.php">Blog</a></li>' .
					 '<li><a href="about.php">About Us</a></li>' .
					 '<li><a href="contact.php">Contact Us</a></li>';
			}
			?>
        </ul>
        <div class="clr"></div>
      </div>
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">