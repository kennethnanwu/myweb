<?php require 'config.php';?>

<html>
<head>
  <title>ACE (Alumnus of Chinese Engineers)</title>
  <?php include('hearder.php'); ?>
</head>
<body>
<?php include("navBar.php"); ?>
<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="w3-display-container w3-center">
    <img src="img/Logo.png" style="width:100%">
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64 draw-when-load" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Reach out to us!</i></p>
    <div class="w3-center draw-when-load">
      <div class="w3-col w3-center w3-large w3-margin-bottom draw-when-load">
        <i class="fa fa-map-marker" style="width:30px"></i>Toronto, Canada<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +1 416-809-5599<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: <a href="mailto:jansin.cai@ace.skule.ca">jansin<span class="hidden">stop spam</span>.cai@ace.skule.ca</a><br>
        <i class="fa fa-wechat" style="width:30px"></i> WeChat Official Accounts: ut_ace<br>
      </div>
      <!-- <div class="w3-col m6">
        <form action="form.asp" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-btn w3-section w3-right" type="submit">SEND</button>
        </form>
      </div> -->
    </div>
  </div>
<!-- End Page Content -->
</div>
</body>
<?php
include('footer.php');
?>
</html>

<style>
  .hidden { display: none; }
</style>

