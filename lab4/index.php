<?php ?>

<!doctype html>

<html lang="en">
<head>

<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <meta charset="utf-8">

  <title>Websystems Lab 4</title>

  <link rel="stylesheet" href="css/styles.css?v=1.0">
<fb-root> </fb-root>
</head>

<!-- WORK PAGE -->
<div data-role="page" id="work">
  <div data-role="header" id="header">
    <h1 id="name"></h1>
  </div>
<div class="ui-grid-a">
<div class="ui-block-a">
  <div data-role="main" class="ui-content tablist-content">

    <ul data-role="listview" data-inset="true" class="tablist-left">
      <li><a href="#work" data-ajax="false">Work</a></li>
      <li><a href="#education" data-ajax="false">Education</a></li>
      <li><a href="#photos" data-ajax="false">Photos</a></li>
    </ul>
    <div id="work-details" class="ui-body-d tablist-content">
    <h5></h5>
  	</div>
  </div>
</div>
<div class="ui-block-b"> 
<div id="tweet-details">
<h4>Statuses</h4>
<ul></ul>
</div>
</div>
</div>
  <div data-role="footer" id="footer">
    <h1>Lab 4 - jQueryMobile / CSS Media Queries</h1>
  </div>
</div>

<!-- EDU PAGE -->
<div data-role="page" id="education">
  <div data-role="header" id="header">
    <h1 id="name"></h1>
  </div>
<div class="ui-grid-a">
<div class="ui-block-a">
  <div data-role="main" class="ui-content tablist-content">

    <ul data-role="listview" data-inset="true" class="tablist-left">
      <li><a href="#work" data-ajax="false">Work</a></li>
      <li><a href="#education" data-ajax="false">Education</a></li>
      <li><a href="#photos" data-ajax="false">Photos</a></li>
    </ul>
    <div id="edu-details" class="ui-body-d tablist-content">
    <h5></h5>
  	</div>
  </div>
</div>
<div class="ui-block-b"> 
<div id="tweet-details">
<h4>Statuses</h4>
<p><ul></ul></p>
</div>
</div>
</div>
  <div data-role="footer" id="footer">
    <h1>Lab 4 - jQueryMobile / CSS Media Queries</h1>
  </div>
</div>

<!-- PHOTOS PAGE -->
<div data-role="page" id="photos">
  <div data-role="header" id="header">
    <h1 id= "name"></h1>
  </div>
<div class="ui-grid-a">
<div class="ui-block-a">
  <div data-role="main" class="ui-content tablist-content">

    <ul data-role="listview" data-inset="true" class="tablist-left">
      <li><a href="#work" data-ajax="false">Work</a></li>
      <li><a href="#education" data-ajax="false">Education</a></li>
      <li><a href="#photos" data-ajax="false">Photos</a></li>
    </ul>
    <div id="photo-details" class="ui-body-d tablist-content">
    <h5></h5>
  	</div>
  </div>
</div>
<div class="ui-block-b"> 
<div id="tweet-details">
<h4>Statuses</h4>
<p><ul></ul></p>
</div>
</div>
</div>
  <div data-role="footer" id="footer">
    <h1>Lab 4 - jQueryMobile / CSS Media Queries</h1>
  </div>
</div>
<body>
  <script src="js/scripts.js"></script>
</body>
</html>