<!DOCTYPE html >
<!--
Template Name: News Magazine
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<?php $settings = $this->adminModel->getsettings(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $settings->sitename; ?></title>
<meta name="description" content="<?php echo $settings->description; ?>">
<meta name="keywords" content="<?php echo $settings->keywords; ?>">
<meta name="copyright" content="<?php echo $settings->copyright; ?>">
<meta name="web_author" content="<?php echo $settings->author; ?>"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url(); ?>assets/layout/scripts/jquery.min.js"></script>
<!-- Homepage Specific -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/layout/scripts/galleryviewthemes/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/layout/scripts/galleryviewthemes/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/layout/scripts/galleryviewthemes/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/layout/scripts/galleryviewthemes/jquery.galleryview.setup.js"></script>
<!-- / Homepage Specific -->
<!--//share buttons-->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "5f9f1d70-a62c-4ce7-acd2-50cf8bf65f79", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script> 
<!---->

</head>
<body id="top" style="font-family: sans-serif;">

<div class="wrapper" style="background-color: #2163ce">
  <div id="header">
    <div class="fl_left">
      <h1><a href="<?php echo base_url(); ?>" style="background-color: transparent; color: #fff"><strong style="color:#fff;background-color: transparent;">W</strong>eb <strong style="color:#fff;background-color: transparent;">B</strong>erita</a></h1>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="">Kategori</a>
          <ul>
            <?php $cats = $this->adminModel->getcat(); ?>
            <?php foreach($cats as $cat): ?>
            <li><a href="<?php echo base_url().'home/category/'.$cat->cat_id; ?>"><?php echo $cat->title; ?></a></li>
          <?php endforeach; ?>
          </ul>
        </li>
      </ul>
    </div>
    <div id="search">
      <form action="<?php echo base_url(); ?>home/search/" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input style="background-color: white; color: black;" placeholder="Search" type="text" name="search" value=""  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Search" style="font-family: sans-serif;" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<br class="clear" />
<div class="latestnews">
<style>
  .top{
    color: #fff;
    background: #000;
    height: 40px;
    border:2px solid #ccc;
  }
  .top span{
    background-color: red;
    color: #fff;
    display: block;
    width: 80px;
    font-size: 20px;
    float: left;
    text-align: center;
    
    z-index: -1000;
  }
  .top marquee{
    float: right;
    padding: 10px;
    height: 55px;
    z-index: 1000;
  }
  .top marquee a{
    z-index: 1000;
    padding: 10px;
    font-weight: bold;
  }
</style>
<?php 
  $newsdata = $this->adminModel->getnewsbylimit(10);
?>
  
</div>

<br class="clear" />